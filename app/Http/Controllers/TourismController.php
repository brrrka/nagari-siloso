<?php

namespace App\Http\Controllers;

use App\Models\Tourism;
use Illuminate\Http\Request;

class TourismController extends Controller
{
    public function index(Request $request)
    {
        $categories = Tourism::distinct()->pluck('category');

        $tourisms = Tourism::when($request->category, function ($query, $category) {
            return $query->where('category', $category);
        })
            ->when($request->search, function ($query, $search) {
                return $query->where('name', 'like', "%{$search}%")
                    ->orWhere('description', 'like', "%{$search}%");
            })
            ->latest()
            ->paginate(12);

        return view('tourism.index', compact('tourisms', 'categories'));
    }

    public function show(Tourism $tourism)
    {
        $relatedTourisms = Tourism::where('category', $tourism->category)
            ->where('id', '!=', $tourism->id)
            ->take(3)
            ->get();

        return view('tourism.show', compact('tourism', 'relatedTourisms'));
    }
}
