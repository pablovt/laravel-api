<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Comments;
use Illuminate\Http\Request;

class CommentsController extends Controller
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
        return Comments::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Comments::find($id);
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
        $comments = Comments::find($id);
        $comments->update($request->all());
        return $comments;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return Comments::destroy($id);
    }

    
    /**
     * Method Search comments by articleId
     *
     * @return \Illuminate\Http\Response
     */
    public function searchByArticleId()
    {
        $articles = Article::all();
        $list = [];

        foreach($articles as $article){
            $comments = Comments::where('article_id', $article['id'])->first();
            array_push($list, $article->id, $comments->grade, $comments->comment);
        }

        return response($list);
    }
}
