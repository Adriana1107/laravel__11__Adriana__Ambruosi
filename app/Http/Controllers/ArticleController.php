<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Post::all();
        return view('articles.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('articles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
   
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'subtitle' => 'required|max:255',
            'body' => 'required',
        ]);

        Post::create($request->only('title', 'subtitle', 'body'));

        return redirect()->route('articles.index')->with('success', 'Articolo creato con successo!');
    }


    /**
     * Display the specified resource.
     */
   public function show(Post $article)
{
    return view('articles.show', compact('article'));
}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $article)
    {
        return view('articles.edit', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $article)
    {
        $article->update([
           'title'=>$request->title,
           'subtitle'=>$request->subtitle,
           'body'=>$request->body
        ]);

         return redirect()->route('articles.index')->with('success', 'Articolo aggiornato con successo!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $article)
    {
        
        $article->delete();
        return redirect()->back()->with('message', 'articolo eliminato');
    }
}
