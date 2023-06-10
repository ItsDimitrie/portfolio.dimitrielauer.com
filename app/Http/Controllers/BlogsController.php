<?php

namespace App\Http\Controllers;

use App\Models\blogs;
use Illuminate\Http\Request;

class BlogsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = Blogs::latest()->get();

        return view('blogs.index', ['blogs' => $blogs]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Blogs::create($this->validateArticle($request));

        return redirect(route('blogs.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(blogs $blog)
    {
        return view('blogs.show', ['blogs' => $blog]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(blogs $blog)
    {
        return view('blogs.edit', ['blogs' => $blog]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, blogs $blog)
    {
        $blog->update($this->validateArticle($request));

        return redirect(route('blogs.show', $blog));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(blogs $blog)
    {
        $blog->delete();

        return redirect(route('blogs.index'));
    }

    /**
     * @return array
     */
    public function validateArticle(Request $request): array
    {
        return request()->validate([
            'titel' => 'required',
            'text' => 'required',
            'afbeelding' => 'required',
        ]);
    }
}
