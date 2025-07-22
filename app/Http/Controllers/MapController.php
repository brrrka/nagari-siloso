<?php

namespace App\Http\Controllers;

use App\Models\Tourism;
use Illuminate\Http\Request;

class MapController extends Controller
{
    public function index()
    {
        $tourismLocations = Tourism::whereNotNull('latitude')
            ->whereNotNull('longitude')
            ->get();

        return view('map.index', compact('tourismLocations'));
    }
}
