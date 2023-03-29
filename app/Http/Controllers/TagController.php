<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Http\Requests\StoreTagRequest;
use App\Http\Requests\UpdateTagRequest;
use Illuminate\Support\Str;

class TagController extends Controller
{
    public function index() {
        //        $tags = Tag::all();
        //        return view('admin.category.index', compact('tags'));
    }

    public function create() {
        //        return view('admin.tag.create');
    }

    public function store(StoreTagRequest $request) {
        $newTag = Tag::create($request->all() + [
                'slug' => Str::slug($request->name, '-'),
            ]);
    }

    public function show(Tag $tag) {
        //        return view('admin.tag.show', compact('tag'));
    }

    public function edit(Tag $tag) {
        //return view('admin.category.edit', compact('tag'));
    }

    public function update(UpdateTagRequest $request, Tag $tag) {
        $tag->update($request->all() + [
                'slug' => Str::slug($request->name, '-'),
            ]);
        //        return redirect()->route('tags.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tag $tag) {
        $tag->delete();
        //        return redirect()->route('tags.index');
    }
}
