<?php

namespace App\Http\Controllers;

use App\Models\Post;
use GuzzleHttp\Psr7\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except('index');
    }



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

         Post::create([
        'title' => $request->title,
        'subtitle' => $request->subtitle,
        'body' => $request->body,
        'user_id' => Auth::id(),
    ]);


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
        if($article->user_id == Auth::user()->id){
        return view('articles.edit', compact('article'));
        }else{
            return redirect()->route('home')->with('errorMessage', 'Non puoi vedere questa pagina');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $article)
    {

        if($article->user_id == Auth::user()->id){
        $article->update([
           'title'=>$request->title,
           'subtitle'=>$request->subtitle,
           'body'=>$request->body
        ]);

         return redirect()->route('articles.index')->with('success', 'Articolo aggiornato con successo!'); 
        }else{
            return redirect()->route('home')->with('errorMessage', 'Non puoi vedere questa pagina');
        }


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $article)
    {
        if($article->user_id == Auth::user()->id){
        $article->delete();
        return redirect()->back()->with('message', 'articolo eliminato');
    }else{
            return redirect()->route('home')->with('errorMessage', 'Non puoi vedere questa pagina');
        }
    }
}
