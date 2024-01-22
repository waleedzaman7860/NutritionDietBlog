<?php

namespace App\Http\Controllers;

use App\Models\Blog as ModelsBlog;
use App\Models\Category as ModelsCategory;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Blog extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blog = ModelsBlog::all();

        return view('admin.list-blog', ['blog' => $blog]);
    }

    /**
     * Show the form for creating a new resource.
     */

    public function create()
    {
        $categories = ModelsCategory::all();
        // dd($categories);
        return view('admin.new-blog',['categories' => $categories]);
    }

    // public function create()
    // {
    //     $blog = ModelsBlog::all();
    //     $blogs = ModelsBlog::with('category')->get();
    //     return view('admin.new-blog', ['blog' => $blog]);
    // }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $data = $request->validate([
            'name' => 'required',
            'category_id' => 'required',
            'description' => 'required',
            'tags' => 'required|array',
        ]);

        $data['created_by_id'] = Auth::id();

        // dd($request)->all();
        // dd($data);

        $blog = ModelsBlog::create($data);

        return redirect()->route('admin.blog.edit', $blog->id);

    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $blog = ModelsBlog::findOrFail($id);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $blog = ModelsBlog::find($id);
        // dd(in_array("choice 3", $blog->tags));

        return view('admin.edit-blog', compact('blog'));
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'name' => 'required',
            'category_id' => 'required',
            'description' => 'required',
            'tags' => 'required|array',
        ]);

        $blog = ModelsBlog::findOrFail($id); // Find the blog record by ID
        $blog->update($data); // Update the blog record with the new data

        return redirect()->route('admin.blog.index', $blog->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $blog = ModelsBlog::find($id);

        // dd($blog);

        $blog->delete();

        return redirect()->route('admin.blog.index')->with('success', 'Post deleted successfully!');
    }

    public function upload(Request $request)
    {

        $data = $request->validate([
            'blog_id' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // request()->file->move(public_path('uploads/file'), $image_path);
        $path = $request->file('image')->store(
            'blogthumbnail', 'public'
        );

        $blog = ModelsBlog::find($data['blog_id']);
        $blog->update(['image' => $path]);

        return response("Image imported.");

    }

    // public function blogview()
    // {

    //     $blog = ModelsBlog::all();

    //     return view('pages.blog', compact('blog'));

    // }

    public function blogview(int $id)
    {
        $blog = ModelsBlog::find($id);

        // dd($blog->created_by_id);
        // This will help you see if the user relationship is loaded or null

        return view('pages.blog', compact('blog', 'id'));
    }
}
