<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Portfolio;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $portfolios = Portfolio::with('category')
            ->orderBy('created_at', 'desc')
            ->limit(6)
            ->get();
        $showcasePortfolios = Portfolio::with('category')->latest()->take(8)->get();
        $articles = Article::with(['category', 'author'])
            ->published()
            ->latest('published_at')
            ->take(3)
            ->get();
        return view('pages.home.index', compact('portfolios', 'showcasePortfolios', 'articles'));
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
    public function show(string $id)
    {
        //
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