<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use App\Models\PortfolioCategory;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = PortfolioCategory::all();

        $featuredPortfolios = Portfolio::with('category')
            ->inRandomOrder()
            ->limit(3)
            ->get();

        $portfolios = Portfolio::with('category')
            ->when(request()->category, function ($query) {
                $query->whereHas('category', function ($q) {
                    $q->where('slug', request()->category);
                });
            })
            ->latest()
            ->paginate(4)
            ->withQueryString();


        return view('pages.portfolio.index', compact('categories', 'portfolios', 'featuredPortfolios'));
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

        $portfolio = Portfolio::with('category')
            ->where('slug', $slug)
            ->firstOrFail();

        $otherPortfolios = Portfolio::with('category')
            ->where('slug', '!=', $slug)
            ->latest()
            ->take(3)
            ->get();

        return view('pages.portfolio.detail', compact('portfolio', 'otherPortfolios'));
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
