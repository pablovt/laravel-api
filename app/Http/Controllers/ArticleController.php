<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Author;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return Article::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Article::find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $article = Article::find($id);
        $article->update($request->all());
        return $article;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return Article::destroy($id);
    }

    /**
     * Method AuthorId article search
     *
     * @return \Illuminate\Http\Response
     */
    public function searchByAuthorId()
    {
        $authors = Author::all();
        $list = [];

        foreach($authors as $author){
            $article = Article::where('author_id', $author['id'])->first();
            array_push($list, $author->id, $article->title, $article->content);
        }

        return response($list);
    }
}
