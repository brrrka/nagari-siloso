<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Gallery;
use App\Models\Umkm;
use App\Models\Tourism;
use App\Models\Event;

class AdminDashboardController extends Controller
{
    public function index()
    {
        $stats = [
            'articles' => Article::count(),
            'galleries' => Gallery::count(),
            'umkm' => Umkm::count(),
            'tourism' => Tourism::count(),
            'events' => Event::count(),
        ];

        $recentArticles = Article::latest()->take(5)->get();
        $upcomingEvents = Event::upcoming()->take(5)->get();

        return view('admin.dashboard', compact('stats', 'recentArticles', 'upcomingEvents'));
    }
}
