<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Umkm;
use App\Models\Tourism;
use App\Models\Event;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $featuredArticles = Article::published()
            ->latest('published_at')
            ->take(3)
            ->get();

        $featuredUMKM = Umkm::featured()
            ->latest()
            ->take(3)
            ->get();

        $featuredTourism = Tourism::featured()
            ->latest()
            ->take(3)
            ->get();

        $upcomingEvents = Event::upcoming()
            ->take(3)
            ->get();

        return view('home', compact(
            'featuredArticles',
            'featuredUMKM',
            'featuredTourism',
            'upcomingEvents'
        ));
    }
}