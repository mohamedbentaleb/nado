<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdsRequest;
use App\Models\Anonnces;
use App\Models\Brands;
use App\Models\Ville;
use App\Models\Media;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;
use Illuminate\Support\Str;

class AnonncesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.ads.index' , ['ads' => Anonnces::all(), 'brands' => Brands::all(), 'city' => ville::all() ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.ads.form', ['ads' => new Anonnces(), 'brands' => Brands::all(), 'city' => ville::all() ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AdsRequest $request)
    {
        $ads = $request->validated();
        $ads["video"] = "";
        //dd($ads);
        $ads = Anonnces::create($ads);

        if ($request->hasFile('userfile')) {
            foreach ($request->file('userfile') as $imagefile) {
                $this->resizeImage($imagefile, $ads->titre, $ads->id);
            }
        }
        return to_route('annonces.index')->with("success" , "Success store brand");
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
    public function destroy(Anonnces $anonnces)
    {
        $anonnces->delete();
        return to_route("anonncest.index")->with("success" , "Anonnce  deleted successfully");
    }

    public function resizeImage($imagefile, $title, $idAds){

                $media = new Media;
                $image = $imagefile;
                $name =  Str::slug($title, '-').'-'.rand(100000, 999999).'.'.$image->getClientOriginalExtension();
                $width = 720; // your max width
                $height = 550; // your max height
                $manager = new ImageManager(new Driver());
                $img = $manager->read($image);
                //$img->insert(storage_path('app/public/marques/hatif-logo-watermark.png'), 'center');
                $img->resize(720, 550);
                $img->height() > $img->width() ? $width=null : $height=null;
                $img->resize($width, $height, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                });
                $img->save(storage_path('app/public/ads/' . $name));
                //$name = Image::make($imagefile)->resize(600,300)->save($imagefile->store('ads', 'public'));
                $media->name = $name;
                $media->annonce_id = $idAds;
                $media->save();
    }

}
