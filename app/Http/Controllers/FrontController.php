<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Imgslider;
use App\Models\Videosads;
use App\Models\Avistext;

class FrontController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('front', ['imgslider' => Imgslider::where('active', 1)->limit(6)->get(), 'vdAds' => Videosads::orderBy('id', 'desc')->limit(6)->get(), 'avistext' => Avistext::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    
       

}
