<?php

namespace App\Http\Controllers\Admin;

use App\Models\Picture;
use App\Models\Project;
use App\Models\Technology;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ProjectRequest;
use Illuminate\Support\Facades\DB;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.projects.index', [
            'projects' => Project::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.projects.form', [
            'project' => new Project(),
            'technologies' => Technology::pluck('name', 'id'),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProjectRequest $request)
    {
        // $project = Project::create($request->validated());
        // $featuredIndex = $request->input('featured_index');

        // $orderedPictures = $request->file('pictures');
        // // dd($orderedPictures);
        // $order = explode(',', $request->input('pictures_order'));
        // // dd($order);

        // $orderedPictures = collect($order)->map(fn($i) => $orderedPictures[$i] ?? null)->filter();
        // $project->technologies()->sync($request->validated('technologies'));
        // // dd($orderedPictures);

        // // $project->attachFiles($request->validated('pictures'), $featuredIndex);
        // $project->attachFiles($orderedPictures->values()->all(), $featuredIndex);
        // return to_route('admin.projects.index')->with('success', 'Le projet a bien été ajouté');
        // Création du projet
        // $project = Project::create($request->validated());

        // // Rechargement du modèle avec son ID (par sécurité dans des environnements stricts)
        // $project->refresh();

        // // Gestion des fichiers
        // $featuredIndex = $request->input('featured_index');
        // $orderedPictures = $request->file('pictures');
        // $order = explode(',', $request->input('pictures_order'));
        // $orderedPictures = collect($order)->map(fn($i) => $orderedPictures[$i] ?? null)->filter();

        // // Association des technologies
        // if ($request->filled('technologies')) {
        //     $project->technologies()->sync($request->validated('technologies'));
        // }

        // // Upload des images
        // $project->attachFiles($orderedPictures->values()->all(), $featuredIndex);

        // return to_route('admin.projects.index')->with('success', 'Le projet a bien été ajouté');
        DB::transaction(function () use ($request) {
            $project = Project::create($request->validated());
            $featuredIndex = $request->input('featured_index');
            $orderedPictures = $request->file('pictures');
            $order = explode(',', $request->input('pictures_order'));
            $orderedPictures = collect($order)->map(fn($i) => $orderedPictures[$i] ?? null)->filter();

            if ($request->filled('technologies')) {
                $project->technologies()->sync($request->validated('technologies'));
            }

            $project->attachFiles($orderedPictures->values()->all(), $featuredIndex);
        });

        return to_route('admin.projects.index')->with('success', 'Le projet a bien été ajouté');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        return view('admin.projects.form', [
            'project' => $project,
            'technologies' => Technology::pluck('name', 'id'),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProjectRequest $request, Project $project)
    {
        // $project->update($request->validated());
        // $project->technologies()->sync($request->validated('technologies'));
        // $project->attachFiles($request->validated('pictures'));
        // return to_route('admin.projects.index')->with('success', 'Le projet a bien été modifié');
        DB::transaction(function () use ($request, $project) {
            // Mise à jour du projet
            $project->update($request->validated());

            // Synchronisation des technologies si présentes
            if ($request->filled('technologies')) {
                $project->technologies()->sync($request->validated('technologies'));
            }

            // Gestion des fichiers (ordonnés ou non selon ton usage)
            $featuredIndex = $request->input('featured_index');
            $orderedPictures = $request->file('pictures');
            $order = explode(',', $request->input('pictures_order'));
            $orderedPictures = collect($order)->map(fn($i) => $orderedPictures[$i] ?? null)->filter();

            $project->attachFiles($orderedPictures->values()->all(), $featuredIndex);
        });

        return to_route('admin.projects.index')->with('success', 'Le projet a bien été modifié');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        Picture::destroy($project->pictures()->pluck('id'));
        $project->delete();
        return to_route('admin.projects.index')->with('success', 'Le projet a bien été supprimé');
    }
}
