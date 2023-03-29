<?php

namespace App\Http\Controllers;

use App\Models\Subcategory;
use App\Http\Requests\StoreSubcategoryRequest;
use App\Http\Requests\UpdateSubcategoryRequest;
use Illuminate\Support\Str;

class SubcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() {
        //                $subcategory = Subcategory::all();
        //                return view('admin.subcategory.index', compact('subcategory'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() {
        //        return view('admin.subcategory.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSubcategoryRequest $request) {
        //        $newSubCategory = Subcategory::create([
        //            'category_id' => $request->category_id,
        //            'name' => $request->name,
        //            'slug' => Str::slug($request->name, '-'),
        //            'description' => $request->description
        //        ]);
        $newSubCategory = Subcategory::create($request->all() + [
                'slug' => Str::slug($request->name, '-'),
            ]);
        //        return redirect()->route('subcategories.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Subcategory $subcategory) {
        //        return view('admin.subcategory.show', compact('subcategory'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Subcategory $subcategory) {
        //        return view('admin.subcategory.edit', compact('subcategory'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSubcategoryRequest $request, Subcategory $subcategory) {
        $subcategory->update([
            'category_id' => $request->category_id,
            'name' => $request->name,
            'slug' => Str::slug($request->name, '-'),
            'description' => $request->description
        ]);
        //        return redirect()->route('subcategories.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Subcategory $subcategory) {
        $subcategory->delete();
        //        return redirect()->route('subcategories.index');
    }
}
