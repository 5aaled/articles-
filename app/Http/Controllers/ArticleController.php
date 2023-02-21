<?php

namespace App\Http\Controllers;

use App\Models\article;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = article::all();
        return view("admin.articles.index",compact("articles"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.articles.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
          article::create($request->all());
        return redirect("articles");
    }

    /**
     * Display the specified resource.
     */
    public function show(article $article)
        //
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
       $article =  article::find($id);
        return view("admin.articles.edit",compact("article"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,)
    {
        $article=  article::find($request->id);
        $article->update($request->except(['_token','id']));
        return redirect("articles");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        article::destroy($id);
        return redirect("articles");
    }
}