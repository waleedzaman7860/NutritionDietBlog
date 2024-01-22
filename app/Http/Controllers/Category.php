<?php

namespace App\Http\Controllers;

use App\Models\Category as ModelsCategory;
use Illuminate\Http\Request;

class Category extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = ModelsCategory::all();

        return view('admin.list-category',['categories' => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = ModelsCategory::all();
        return view('admin.category-blog', ['categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Store the image in the 'public/blogthumbnail' folder
        $path = $request->file('image')->store('blogthumbnail', 'public');

        // Add the 'image' field to the $data array with the image path
        $data['image'] = $path;

        // Create a new instance of the ModelsCategory model and save it to the database
        $categories = ModelsCategory::create($data);

        return redirect()->route('admin.category.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $categories = ModelsCategory::findOrFail($id);
        return view('admin.list-category', ['categories' => $categories]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $categories = ModelsCategory::find($id);


        return view('admin.edit-category', compact('categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $data = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',

        ]);

        $categories = ModelsCategory::findOrFail($id); // Find the blog record by ID
        $categories->update($data); // Update the blog record with the new data
        dd($request->all());

        return redirect()->route('admin.category.index', $categories->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $categories = ModelsCategory::find($id);

        // dd($blog);

        $categories->delete();

        return redirect()->route('admin.category.index')->with('success', 'Post deleted successfully!');
    }


}
