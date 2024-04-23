<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Article:: latest()->get();
        return view("articles.index",['articles'=>$articles]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("articles.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        request()->validate([
            'title' => ['required','min:3','max:255'],
            'body' =>'required'

        ]);
        

        $article = new Article();
        $article->title = request("title");
        $article->body = request("body");
        $article->save();
        return redirect("/articles");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $article = Article::find($id);
        return view("articles.show",["article"=>$article]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $article=Article::find($id);
        return view("articles.edit",["article"=>$article]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
       $article = Article::find($id);
       $article->title=request("title");
       $article->body=request("body");
       $article->save();
       return redirect("/articles");

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        
        $article = Article::find($id);
        $article->delete();
        return redirect("/articles");
        
    }
}
