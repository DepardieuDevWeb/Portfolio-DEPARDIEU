<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\TechnologyRequest;
use App\Models\Technology;

class TechnologyController extends Controller
{

    public function index()
    {
        return view('admin.technologies.index', [
            'technologies' => Technology::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.technologies.form', [
            'technology' => new Technology()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TechnologyRequest $request)
    {
        $Technology = Technology::create($request->validated());
        return to_route('admin.technologies.index')->with('success', 'La technologies a bien été ajoutée');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Technology $technology)
    {
        return view('admin.technologies.form', [
            'technology' => $technology
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TechnologyRequest $request, Technology $technology)
    {
        $technology->update($request->validated());
        return to_route('admin.technologies.index')->with('success', 'La technologie a bien été modifiée');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Technology $technology)
    {
        $technology->delete();
        return to_route('admin.technologies.index')->with('success', 'La technology a bien été supprimée');
    }
}
