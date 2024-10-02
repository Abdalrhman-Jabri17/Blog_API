<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreArticleRequest;
use App\Http\Requests\UpdateArticleRequest;
use App\Http\Resources\ArticleCollection;
use App\Http\Resources\ArticleResource;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return new ArticleCollection(Article::paginate());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreArticleRequest $request)
    {
        $article = Article::create($request->validated());

        return new ArticleResource($article);
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, Article $article)
    {
        if ($request->has('include_tags') && ($request->include_tags == 'true')) {
            $article->load('tags');
        }
        return new ArticleResource($article);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateArticleRequest $request, Article $article)
    {
        $article->update($request->validated());

        return new ArticleResource($article);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        $article->delete();

        return response()->noContent();
    }
    public function attachTag(Article $article, Request $request)
    {
        $request->validate([
            'tag_id' => 'required|exists:tags,id'
        ]);

        $article->tags()->attach($request->tag_id);

        return new ArticleResource($article);
    }
}
