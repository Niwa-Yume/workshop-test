<?php

namespace App\Http\Controllers;
use App\Models\Recipe;

use Illuminate\Http\Request;
use App\Http\Requests\RecipeRequest;


class RecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $recipes =  Recipe::paginate(5);
        return view('recipes.index', ['recipes' => $recipes]);
         
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('recipes.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RecipeRequest $request)
    {

        Recipe::create($request->validated());


        return redirect()->route('recipe.index')
        ->with('ok', __('Recipe has been saved'));
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
