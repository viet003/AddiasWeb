<?php

namespace App\Http\Controllers;

use App\Models\Dish;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\StoreDishRequest;
use App\Http\Requests\UpdateDishRequest;

class DishController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() : View
    {
        return view('dishes.index', [
            'dishes' => Dish::latest()->paginate(3)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() : View
    {
        return view('dishes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDishRequest $request) : RedirectResponse
    {
        Dish::create($request->all());
        return redirect()->route('dishes.index')
                ->withSuccess('New dish is added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Dish $dish) : View
    {
        return view('dishes.show', [
            'dish' => $dish
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dish $dish) : View
    {
        return view('dishes.edit', [
            'dish' => $dish
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDishRequest $request, Dish $dish) : RedirectResponse
    {
        $dish->update($request->all());
        return redirect()->back()
                ->withSuccess('Dish is updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dish $dish) : RedirectResponse
    {
        $dish->delete();
        return redirect()->route('dishes.index')
                ->withSuccess('Dish is deleted successfully.');
    }
}
