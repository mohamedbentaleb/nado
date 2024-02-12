<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Avisvideos;
use Illuminate\Http\Request;

class AvisVdController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.avisvideos.index' , ['avisvideos' => Avisvideos::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.avisvideos.form', ['avisvideos' => new Avisvideos()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $avisvideos = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'video_key' => ['required', 'string', 'max:255'],
        ]);
        Avisvideos::create($avisvideos);
        return to_route('avisvideos.index')->with("success" , "Success store avis videos");
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
    public function edit(Avisvideos $avisvideos)
    {
        return view('admin.avisvideos.form', [
            'avisvideos' => $avisvideos
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Avisvideos $avisvideos)
    {
        $n = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'video_key' => ['required', 'string', 'max:255'],
        ]);
        $avisvideos->update($n);
        return to_route('avisvideos.index')->with("success" , "success update avis videos");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Avisvideos $avisvideos)
    {
        $avisvideos->delete();
        return to_route("avisvideos.index")->with("success" , "avis videos deleted successfully");
    }
}
