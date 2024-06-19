<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brands;
use App\Models\Reprise;
use App\Models\Ville;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;
use Illuminate\Support\Str;


class RepriseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('reprise', ["brands" => Brands::all(), "city" => Ville::all()]);
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
        $reprise = $request->validate([
            'name' => ['required', 'string'],
            'city' => ['required', 'string'],
            'mark' => ['required', 'string'],
            'modele' => ['required', 'string'],
            'phone' => ['required', 'string'],
            'email' => ['required', 'string'],
            'contacte' => ['required', 'string'],
            'rendezvous' => ['required', 'string'],

        ]);
        Reprise::create($reprise);
        return to_route('reprise.index')->with("success" , "Votre demande a ete envoyer");
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
