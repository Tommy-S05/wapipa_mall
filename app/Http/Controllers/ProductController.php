<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Subcategory;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() {
        $products = Product::all();
        return view('admin.product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() {
        //        $subcategories = Subcategory::all();
        $categories = Category::all();
        return view('admin.product.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request) {
        $newProduct = Product::create($request->all() + [
                'slug' => Str::slug($request->name, '-'),
            ]);
        $code = str_pad($newProduct->id, 4, '0', STR_PAD_LEFT);
        $newProduct->code = $code;
        $newProduct->save();
        //        $newProduct->tags()->attach($request->get('tags'));
        $newProduct->upload_images($request, $newProduct);
        //        return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product) {
        //        return view('admin.product.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product) {
        $subcategories = Subcategory::all();
        //        return view('admin.product.edit', compact('product', 'subcategories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, Product $product) {
        $product->update($request->all() + [
                'slug' => Str::slug($request->name, '-'),
            ]);
        //        $product->tags()->sync($request->get('tags'));
        $product->upload_images($request, $product);
        //        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product) {
        $product->delete();
        //        return redirect()->route('products.index');
    }

    public function change_status(Product $product) {
        if($product->status == 'ACTIVE') {
            $product->status = 'DEACTIVATE';
            $product->save();
            return redirect()->back();
        } else {
            $product->status = 'ACTIVE';
            $product->save();
        }
        return redirect()->back();
    }
}
