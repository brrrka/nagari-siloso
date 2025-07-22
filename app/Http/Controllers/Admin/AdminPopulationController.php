<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PopulationData;
use Illuminate\Http\Request;

class AdminPopulationController extends Controller
{
    public function index()
    {
        $populationData = PopulationData::latest()->paginate(10);
        return view('admin.population.index', compact('populationData'));
    }

    public function create()
    {
        return view('admin.population.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'category' => 'required|string|max:255',
            'value' => 'required|integer|min:0',
            'unit' => 'required|string|max:50',
            'description' => 'nullable|string',
            'year' => 'required|integer|min:2000|max:' . (date('Y') + 1),
        ]);

        PopulationData::create($validated);

        return redirect()->route('admin.population.index')->with('success', 'Data penduduk berhasil ditambahkan.');
    }

    public function edit(PopulationData $population)
    {
        return view('admin.population.edit', compact('population'));
    }

    public function update(Request $request, PopulationData $population)
    {
        $validated = $request->validate([
            'category' => 'required|string|max:255',
            'value' => 'required|integer|min:0',
            'unit' => 'required|string|max:50',
            'description' => 'nullable|string',
            'year' => 'required|integer|min:2000|max:' . (date('Y') + 1),
        ]);

        $population->update($validated);

        return redirect()->route('admin.population.index')->with('success', 'Data penduduk berhasil diupdate.');
    }

    public function destroy(PopulationData $population)
    {
        $population->delete();

        return redirect()->route('admin.population.index')->with('success', 'Data penduduk berhasil dihapus.');
    }
}
