<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ModelsRequest;
use Illuminate\Http\Request;
use App\Models\Models;
use App\Models\Brands;
use Illuminate\Support\Facades\Auth;

class ModelsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.models.index' , ['models' => models::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.models.form', ['model' => new Models(), 'brands' => brands::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ModelsRequest $request)
    {
        $models = $request->validated();
        $models["ip"] = $request->ip();
        $models["user_agent"] = $request->header('User-Agent');
        $models["user_id"] = Auth::id();
        Models::create($models);
        return to_route('models.index')->with("success" , "Success store model");
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
    public function edit(Models $model)
    {
        return view('admin.models.form', [
            'model' => $model,
            'brands' => brands::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ModelsRequest $request, Models $model)
    {
        $n = $request->validated();
        $model->update($n);
        return to_route('models.index')->with("success" , "success update Model");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Models $model)
    {
        $model->delete();
        return to_route("models.index")->with("success" , "Model deleted successfully");
    }
}
