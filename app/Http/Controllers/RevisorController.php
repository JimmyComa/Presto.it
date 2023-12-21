<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Mail\BecomeRevisor;
use App\Models\Announcement;
use Illuminate\Http\Request;
use App\Models\RevisorAction;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Artisan;

class RevisorController extends Controller
{
    // HOME
    public function index(){
        $revisorAction = RevisorAction::where('user_id',Auth::user()->id)->orderBy('id','desc')->get();
        $announcement_to_check = Announcement::where('is_accepted', null)->first();

        $announcements_count = Announcement::where('is_accepted',null)->get()->count();

        $announcements_true= Announcement::where('user_id', Auth::user()->id)->where('is_accepted', true)->orderBy('created_at','desc')->get();
        $announcements_false= Announcement::where('user_id', Auth::user()->id)->where('is_accepted', false)->orderBy('created_at','desc')->get();

        return view('revisor.index', compact('announcement_to_check','revisorAction','announcements_true','announcements_false', 'announcements_count'));
    }


    public function revisorCronology($n){
        if(RevisorAction::where('user_id',Auth::user()->id)->get()->count()>$n){

            RevisorAction::where('user_id',Auth::user()->id)->get()->first()->delete();
        }
    }

    // PULSANTI
    public function acceptAnnouncement(Announcement $announcement){

        $announcement->setAccepted(true);
        RevisorAction::create([
            'announcement_id'=> $announcement->id,
            'action'=> true,
            'user_id'=> Auth::user()->id,
        ]);
        $this->revisorCronology(10);
        return redirect()->back()->with('message',"complimenti, hai accettato l'annuncio ");
        
    }
    public function rejectAnnouncement(Announcement $announcement){
        
        $announcement->setAccepted(false);
        RevisorAction::create([
            'announcement_id'=> $announcement->id,
            'action'=> false,
            'user_id'=> Auth::user()->id,
        ]);
        $this->revisorCronology(10);
        return redirect()->back()->with('message',"complimenti, hai rifiutato l'annuncio ");
        
    }
    
    public function undoLastAnnouncement(){
        $action=RevisorAction::where('user_id',Auth::user()->id)->get()->last();
        $this->revisorCronology(10);
        if ($action) {
            $announcement=Announcement::find($action->announcement_id);
            $announcement->setAccepted(null);
            $action->delete();
            return redirect()->back()->with('message', $action->action ? 'azione annulata: accetta' : 'azione annulata: rifiuta');
        }else{
            return redirect()->back()->with('message',"non c'è nulla da annulare");
        }
    }

    // public function undoAnnouncement(RevisorAction $action){
    //     $this->revisorCronology(10);

    //     if($action->user_id==Auth::user()->id){
    //         $announcement=Announcement::find($action->announcement_id);
    //         $announcement->setAccepted(null);
    //         $action->delete();
    //         return redirect()->back()->with('message', $action->action ? 'azione annulata: accetta' : 'azione annulata: rifiuta');
    //     }else{
    //         return redirect('/')->with('message',"modifa non autorizzata");
    //     }
    // }

    public function undoAnnouncement(Announcement $announcement){
        $this->revisorCronology(10);

        if(isset($announcement->is_accepted)){
            $announcement->setAccepted(null);
            return redirect()->back()->with('message', $announcement->is_accepted ? 'azione annulata: accetta' : 'azione annulata: rifiuta');
        }else{
            return redirect('/')->with('message',"Modifica non autorizzata");
        }
    }

    // VISTA MAIL
    public function wwu(){
        return view('revisor.wwu');
    }

    // MAIL
    public function becomeRevisor(){
        // dump('quak');
        Mail::to('admin@presto.it')->send(new BecomeRevisor( User::find(Auth::user()->id) ));
        return redirect('/')->with('success','Complimenti hai richiesto di diventare revisore correttamente');
    }
    public function makeRevisor($id){

        $user = User::find($id);

        if($user){
            if (Auth::user()->is_admin) {
                Artisan::call('presto:makeUserRevisor',['email' => $user->email]);
                return redirect('/')->with('success','L\'utente è diventato un revisore');
            }
            else{
                return redirect('/')->with('failed','Autorizzazione insufficente');
            }
        }
        else{
            return redirect('/')->with('failed','Utente inesistente');
        }

    }
}
