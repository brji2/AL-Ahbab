<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Institute;
use App\Models\Location;
use App\Models\Manager;
use App\Models\Region;
use Illuminate\Http\Request;

class InstituteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $institutes = Institute::with(['location', 'manager', 'region'])->get();

        return view('institutes.index', compact('institutes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $locations = Location::all();
        $managers = Manager::all();
        $regions = Region::all();

        return view('institutes.create', compact('locations', 'managers', 'regions'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'location_id' => 'required|exists:locations,id',
            'manager_id' => 'required|exists:managers,id',
            'region_id' => 'required|exists:regions,id',
        ]);

        Institute::create($request->all());

        return redirect()->route('institutes.index')->with('success', 'Institute created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Institute $institute)
    {
        return view('institutes.show', compact('institute'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Institute $institute)
    {
        $locations = Location::all();
        $managers = Manager::all();
        $regions = Region::all();

        return view('institutes.edit', compact('institute', 'locations', 'managers', 'regions'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Institute $institute)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'location_id' => 'required|exists:locations,id',
            'manager_id' => 'required|exists:managers,id',
            'region_id' => 'required|exists:regions,id',
        ]);

        $institute->update($request->all());

        return redirect()->route('institutes.index')->with('success', 'Institute updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Institute $institute)
    {
        $institute->delete();

        return redirect()->route('institutes.index')->with('success', 'Institute deleted successfully.');
    }
}
