<?php

namespace App\Livewire;


use App\Models\Image;
use Livewire\Component;
use App\Models\Category;
use App\Jobs\RemoveFaces;
use App\Jobs\ResizeImage;
use App\Models\Announcement;
use Livewire\WithFileUploads;
use App\Jobs\GoogleVisionLabelImage;
use App\Jobs\GoogleVisionSafeSearch;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class CreateAnnouncement extends Component
{
    use WithFileUploads;

    public $title;
    public $price;
    public $description;

    public $announcement;
    public $test='banana';

    public $temporary_images;
    public $images=[];
    public $image;
    public $category_id;

    protected $rules = [
        "title" => 'required|max:255',
        "price" => 'required|decimal:0,2|max:99999.99',
        "description" => 'required|string|min:50',
        "images.*"=> 'image|max:2048',
        "temporary_images.*"=> 'image|max:2048',
    ];
    public function messages(){
        return [
            "title.required" => "Campo obbligatorio",
            "title.max" => "Il titolo non può avere più di 255 caratteri",
            "price.required" => "Campo obbligatorio",
            "price.max" => "Non è disponibile quest'opzione",
            "description.required" => "Campo obbligatorio",
            "description.min" => "Campo troppo corto",
            "description.string"=> "Il campo in fase di convalida deve essere una stringa.",
            "image.image" => "L'immagine deve essere in formato jpg, jpeg, png, bmp, gif, svg o webp"
        ];
    }
    public function updatedTemporaryImages(){
        if($this->validate([
            "temporary_images.*" => "image|max:2048"
        ])){
            foreach($this->temporary_images as $image){
                $this->images[] = $image;
            }
        }
    }

    public function removeImage($key){

        if(in_array($key, array_keys($this->images))){
            unset($this->images[$key]);
        }
    }

    public function commasToDot($string){
        str_replace(',','.',$string);
    }

    public function store(){
        


        $this->commasToDot($this->price);

        $this->validate();

        // $this->announcement =Category::find($this->category_id)->announcements()->create($this->validate());
        // if (count($this->images)) {
        //     foreach ($this->images as $image) {
        //         $this->announcement->images()->create(['path'=>$image->store('images','public')]);
        //     }
        // }



        if(Auth::user()){
            $this->announcement=Announcement::create([
                'title'=>$this->title,
                'price'=>$this->price,
                'description'=>$this->description,
                'user_id'=>Auth::user()->id,
                'category_id'=> $this->category_id ? $this->category_id : Category::where('name','Altro')->get()->last()->id,
            ]);
            
            if (count($this->images)) {
                foreach ($this->images as $image) {
                    
                        // $this->announcement->images()->create(['path'=>$image->store('images','public')]),
                        $newFileName = "announcements/{$this->announcement->id}";
                        $newImage = $this->announcement->images()->create(['path'=>$image->store($newFileName,'public')]);
                    RemoveFaces::withChain([  
                        new ResizeImage($newImage->path , 300 , 300),
                        new GoogleVisionSafeSearch($newImage->id), 
                        new GoogleVisionLabelImage($newImage->id)
                    ])->dispatch($newImage->id);
                }
                    File::deleteDirectory(storage_path('/app/livewire-tmp'));
            }
            $this->reset();

            session()->flash('success','Annuncio inserito con successo!');
            return redirect('/');
        }else{

            session()->flash('success', 'Non sei autorizzato');
            
        }
        
    }

    public function render()
    {
        $categories=Category::all();
        return view('livewire.create-announcement',compact('categories'));
    }
}