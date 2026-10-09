<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function companyProfile()
    {
        $companyProfiles = Portfolio::with('category')
            ->whereHas('category', fn ($q) => $q->where('slug', 'company-profile'))
            ->latest()
            ->take(4)
            ->get();

        return view('pages.service.company-profile', compact('companyProfiles'));
    }
    public function onlineStore()
    {
        $onlineStores = Portfolio::with('category')
            ->whereHas('category', fn ($q) => $q->where('slug', 'online-store'))
            ->latest()
            ->take(4)
            ->get();
        return view('pages.service.online-store', compact('onlineStores'));
    }

    public function custom()
    {
        return view('pages.service.custom');
    }
}