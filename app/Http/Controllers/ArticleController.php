<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\ArticleCategory;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = ArticleCategory::get();
        $search = request('search');
        $categorySlug = request('category');

        $articles = Article::with(['category', 'author'])
            ->where('status', 'published')
            ->when($search, function ($query, $search) {
                $query->where('title', 'like', "%{$search}%");
            })
            ->when($categorySlug, function ($query, $categorySlug) {
                $query->whereHas('category', function ($q) use ($categorySlug) {
                    $q->where('slug', $categorySlug);
                });
            })
            ->orderByDesc('published_at')
            ->paginate(6)
            ->withQueryString();


        $popularArticles = Article::with(['category', 'author'])
            ->where('status', 'published')
            ->orderBy('views', 'desc')
            ->take(4)
            ->get();

        $latestArticle = Article::with(['category', 'author'])
            ->where('status', 'published')
            ->orderByDesc('published_at')
            ->first();

        return view('pages.article.index', compact('categories', 'articles', 'popularArticles', 'latestArticle'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($slug)
    {

        $categories = ArticleCategory::get();

        $article = Article::with(['category', 'author'])
            ->where('slug', $slug)
            ->where('status', 'published')
            ->firstOrFail();

        $article->increment('views');

        $otherArticles = Article::with(['category', 'author'])
            ->where('slug', '!=', $slug)
            ->where('status', 'published')
            ->latest()
            ->take(3)
            ->get();

        return view('pages.article.detail', compact('categories', 'article', 'otherArticles'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
