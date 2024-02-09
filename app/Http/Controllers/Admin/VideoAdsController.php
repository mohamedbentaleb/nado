<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Videosads;
use Illuminate\Http\Request;

class VideoAdsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.videoads.index' , ['videoads' => Videosads::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.videoads.form', ['videoads' => new Videosads()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $videoads = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'video_key' => ['required', 'string', 'max:255'],
        ]);
        Videosads::create($videoads);
        return to_route('videoads.index')->with("success" , "Success store video ads");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Videosads $videoads)
    {
        return view('admin.videoads.form', [
            'videoads' => $videoads
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Videosads $videoads)
    {
        $n = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'video_key' => ['required', 'string', 'max:255'],
        ]);
        $videoads->update($n);
        return to_route('videoads.index')->with("success" , "success update video ads");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Videosads $videoads)
    {
        $videoads->delete();
        return to_route("videoads.index")->with("success" , "Video ads deleted successfully");
    }
}
