<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Brands;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class BrandsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.brands.index' , ['brands' => Brands::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.brands.form', ['brand' => new Brands()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $brands = $request->validated();
        if ($request->hasFile('logo')) {
            $brands["logo"] = $this->resizeImage($request->file('photo'), $request->name, 750, 500);
        }
        $brands["ip"] = $request->ip();
        $brands["user_agent"] = $request->header('User-Agent');
        $brands["user_id"] = Auth::id();
        $brands = Brands::create($brands);
        return to_route('admin.brands.index')->with("success" , "Success store news");
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
    public function edit(Brands $brand)
    {
        return view('admin.brands.form', [
            'brand' => $brand
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Brands $brand)
    {
        $n = $request->validated();
       if ($request->hasFile('photo')) {
            $n["photo"] = $this->resizeImage($request->file('photo'), $request->title, 750, 500);
        }
        if(!$request->has('active')){
            $n["active"] = 0;
        }
        $brand->update($n);
        $brand->tags()->sync($request->validated('tags'));
        return to_route('admin.brands.index')->with("success" , "success update brand");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Brands $brand)
    {
        $brand->delete();
        return to_route("admin.brands.index")->with("success" , "Brand deleted successfully");
    }

    public function resizeImage($photo, $title, $width, $height){
        $image = $photo;
        $imageName = Str::slug($title, '-').'-'.time().'.'.$image->getClientOriginalExtension();
        $img = Image::make($image);
        $img->resize($width, $height);
        $img->save(storage_path('app/public/brands/' . $imageName));
        return $imageName;
    }
}
