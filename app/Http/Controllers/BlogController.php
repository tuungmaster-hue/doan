<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::all();
        $totalBlogs = $blogs->count();
        return view('pages.admin.blog.index', compact('blogs'));
    }
    public function create()
    {
        return view('pages.admin.blog.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|unique:blogs,title',
            'body' => 'required',
            'image' => 'nullable|image|max:2048',
        ]);

        $data = $request->all();
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('blogs', 'public');
        }

        Blog::create($data);

        return redirect()->route('admin.blogs.index')
            ->with('success', 'Blog created successfully');
    }
    public function edit($id)
    {
        $blog = Blog::findOrFail($id);
        return view('pages.admin.blog.edit', compact('blog'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|unique:blogs,title,' . $id,
            'body' => 'required',
            'image' => 'nullable|image|max:2048',
        ]);

        $blog = Blog::findOrFail($id);
        $data = $request->all();
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('blogs', 'public');
        }

        $blog->update($data);

        return redirect()->route('admin.blogs.index')
            ->with('success', 'Blog updated successfully');
    }
    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);
        $blog->delete();

        return redirect()->route('admin.blogs.index')
            ->with('success', 'Blog deleted successfully');
    }
    public function show($id)
    {
        $blog = Blog::findOrFail($id);
        return view('pages.admin.blog.show', compact('blog'));
    }
}