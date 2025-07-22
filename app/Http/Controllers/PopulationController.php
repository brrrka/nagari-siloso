<?php

namespace App\Http\Controllers;

use App\Models\PopulationData;
use Illuminate\Http\Request;

class PopulationController extends Controller
{
    public function index()
    {
        $populationData = PopulationData::orderBy('category')->get();
        $totalPopulation = PopulationData::where('category', 'Total Penduduk')->first();

        return view('population.index', compact('populationData', 'totalPopulation'));
    }
}
