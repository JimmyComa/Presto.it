<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Http\Request;

class AnnouncementController extends Controller
{
    public function __construct(){
        $this->middleware('auth')->except('index','show');
        // $this->middleware('guest')->except('create','index','show');
    }

    // INDEX
    public function index()
    {
        $announcements = Announcement::where('is_accepted', true)->orderBy('created_at', 'desc')->get();
        return view('announcement.index', compact('announcements'));
    }

    // CREATE
    public function create(){
        return view('announcement.create');
        
    }

    // STORE
    public function store(Request $request)
    {

    }

    // SHOW
    public function show($announcement)
    {
        $announcement = Announcement::find($announcement);
        return view('announcement.details', compact('announcement'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Announcement $announcement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Announcement $announcement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Announcement $announcement)
    {
        //
    }
}

