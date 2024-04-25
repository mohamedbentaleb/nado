<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brands;
use App\Models\Ville;
use App\Models\Financement;

class FinancementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('financement', ["brands" => Brands::all(), "city" => Ville::all()]);
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
        $financement = $request->validate([
            'name' => ['required', 'string'],
            'phone' => ['required', 'string'],
            'city' => ['required', 'string'],
            'mark' => ['required', 'string'],
            'modele' => ['required', 'string'],
            'year' => ['required', 'numeric'],
            'situationprof' => ['required', 'string'],
            'revenusmensuels' => ['required', 'string'],
            'creditsencours' => ['required', 'string'],
            'duree' => ['required', 'string']

        ]);
        Financement::create($financement);
        return to_route('financement.index')->with("success" , "Votre demande a ete envoyer");
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
