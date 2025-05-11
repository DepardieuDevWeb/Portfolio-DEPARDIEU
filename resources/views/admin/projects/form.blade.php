@extends('admin.base') @section('title', 'Project') @section('content')
@include('shared.flash')
<form
    action="{{ route($project->exists ? 'admin.projects.update' : 'admin.projects.store', $project) }}"
    method="post"
    enctype="multipart/form-data"
>
    <div class="">
        @csrf @method($project->exists ? 'put' : 'post')
        @include('shared.input', ['name' => 'title', 'label' => 'Projet',
        'value' => $project->title]) @include('shared.input', ['type' =>
        'textarea','name' => 'meta_description', 'label' => 'Pétite
        description', 'value' => $project->description])
        @include('shared.input', ['type' => 'textarea','name' => 'description',
        'label' => 'Description', 'value' => $project->description])
        @include('shared.input', ['name' => 'project_url', 'label' => 'Lien du
        projet', 'value' => $project->project_url]) @include('shared.input',
        ['name' => 'github_url', 'label' => 'Lien Github', 'value' =>
        $project->github_url])
    </div>
    @include('shared.select', ['name' => 'technologies', 'label' =>
    'technologies', 'value' => $project->technologies()->pluck('id'), 'multiple'
    => true, 'options' => $technologies]) @include('shared.upload', ['name' =>
    'pictures', 'label' => 'Images', 'multiple' => true])
    <div
        id="preview-container"
        style="display: flex; gap: 10px; flex-wrap: wrap"
    ></div>
    <input type="hidden" name="featured_index" id="featured_index" value="0" />
    <input type="hidden" name="pictures_order" id="pictures_order" />
    <button type="submit">Soumettre</button>
</form>

@endsection
