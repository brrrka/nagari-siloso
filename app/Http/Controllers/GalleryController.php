<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index(Request $request)
    {
        $categories = Gallery::distinct()->pluck('category');

        $galleries = Gallery::when($request->category, function ($query, $category) {
            return $query->where('category', $category);
        })
            ->latest()
            ->paginate(12);

        return view('gallery.index', compact('galleries', 'categories'));
    }
}
