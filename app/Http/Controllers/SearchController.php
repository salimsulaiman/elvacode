<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Portfolio;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function suggest(Request $request)
    {
        $q = trim((string) $request->query('q', ''));

        if (mb_strlen($q) < 2) {
            return response()->json(['articles' => [], 'portfolios' => []]);
        }

        $like = '%' . addcslashes($q, '%_\\') . '%';

        $articles = Article::with('category')
            ->published()
            ->where(fn ($query) => $query->where('title', 'like', $like)->orWhere('excerpt', 'like', $like))
            ->orderByDesc('published_at')
            ->limit(4)
            ->get()
            ->map(fn ($a) => [
                'title' => $a->title,
                'meta' => $a->category?->name,
                'image' => $a->thumbnail ? asset('storage/' . $a->thumbnail) : null,
                'url' => lroute('article.show', $a->slug),
            ]);

        $portfolios = Portfolio::with('category')
            ->where(fn ($query) => $query->where('name', 'like', $like)->orWhere('summary', 'like', $like))
            ->latest()
            ->limit(4)
            ->get()
            ->map(fn ($p) => [
                'title' => $p->name,
                'meta' => $p->category?->name,
                'image' => $p->thumbnail ? asset('storage/' . $p->thumbnail) : null,
                'url' => lroute('portfolio.show', $p->slug),
            ]);

        return response()->json(['articles' => $articles, 'portfolios' => $portfolios]);
    }
}
