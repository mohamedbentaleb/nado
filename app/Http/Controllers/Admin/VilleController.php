<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Ville;
use Illuminate\Http\Request;

class VilleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.ville.index' , ['ville' => ville::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.ville.form', ['ville' => new Ville()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $ville = $request->validate([
            'name' => ['required', 'string', 'max:255'],
        ]);
        Ville::create($ville);
        return to_route('ville.index')->with("success" , "Success store ville");
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
    public function edit(Ville $ville)
    {
        return view('admin.ville.form', [
            'ville' => $ville
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ville $ville)
    {
        $n = $request->validate([
            'name' => ['required', 'string', 'max:255'],
        ]);
        $ville->update($n);
        return to_route('ville.index')->with("success" , "success update ville");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ville $ville)
    {
        $ville->delete();
        return to_route("ville.index")->with("success" , "Ville deleted successfully");
    }
}
