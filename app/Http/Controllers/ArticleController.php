<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\ArticleCategory;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $categories = ArticleCategory::get();
        $search = request('search');
        $categorySlug = request('category');

        $articles = Article::with(['category', 'author'])
            ->published()
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

        $featuredArticle = Article::with(['category', 'author'])
            ->published()
            ->where('is_featured', true)
            ->orderByDesc('published_at')
            ->first();

        $popularArticles = Article::with(['category', 'author'])
            ->published()
            ->orderBy('views', 'desc')
            ->take(4)
            ->get();

        $latestArticle = Article::with(['category', 'author'])
            ->published()
            ->orderByDesc('published_at')
            ->first();

        return view('pages.article.index', compact(
            'categories',
            'articles',
            'featuredArticle',
            'popularArticles',
            'latestArticle'
        ));
    }

    public function show($slug)
    {
        $categories = ArticleCategory::get();

        $article = Article::with(['category', 'author'])
            ->published()
            ->where('slug', $slug)
            ->firstOrFail();

        $article->increment('views');

        $otherArticles = Article::with(['category', 'author'])
            ->published()
            ->where('slug', '!=', $slug)
            ->latest('published_at')
            ->take(3)
            ->get();

        return view('pages.article.detail', compact(
            'categories',
            'article',
            'otherArticles'
        ));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}