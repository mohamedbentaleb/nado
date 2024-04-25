<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brands;
use App\Models\Vente;
use App\Models\Ville;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;
use Illuminate\Support\Str;

class VenteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('vente', ["brands" => Brands::all(), "city" => Ville::all()]);
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
        $vente = $request->validate([
            'name' => ['required', 'string'],
            'phone' => ['required', 'string'],
            'city' => ['required', 'string'],
            'mark' => ['required', 'string'],
            'modele' => ['required', 'string'],
            'year' => ['required', 'numeric'],
            'km' => ['required', 'numeric'],
            'carburant' => ['required', 'string'],
            'box' => ['required', 'string'],
            'etat' => ['required', 'string'],
            'origine' => ['required', 'string'],
            'type' => ['required', 'string'],
            'jeveux' => ['required', 'string'],
            'mode' => ['required', 'string'],
            'rendezvous' => ['required', 'string'],
            'img_avant' => ['required', 'mimes:jpeg,png,jpg,gif', 'max:5120'],
            'img_derriere' => ['required', 'mimes:jpeg,png,jpg,gif', 'max:5120'],
            'img_cartegrise' => ['required', 'mimes:jpeg,png,jpg,gif', 'max:5120'],

        ]);
        if ($request->hasFile('img_avant')) {
            $vente["img_avant"] = $this->resizeImage($request->file('img_avant'), $vente['mark']."-".$vente['modele']);
        }
        if ($request->hasFile('img_derriere')) {
            $vente["img_derriere"] = $this->resizeImage($request->file('img_derriere'), $vente['mark']."-".$vente['modele']);
        }
        if ($request->hasFile('img_cartegrise')) {
            $vente["img_cartegrise"] = $this->resizeImage($request->file('img_cartegrise'), $vente['mark']."-".$vente['modele']);
        }
        Vente::create($vente);
        return to_route('vente.index')->with("success" , "Votre demande a ete envoyer");
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

    public function resizeImage($photo, $title){
        $image = $photo;
        $imageName = Str::slug($title, '-').'-'.rand(100000, 999999).'.'.$image->getClientOriginalExtension();
        $manager = new ImageManager(new Driver());
        $img = $manager->read($image);
        $img->save(storage_path('app/public/vente/' . $imageName));
        return $imageName;
    }
}
