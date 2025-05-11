@extends('admin.base') @section('title', 'Project') @section('content')

<div class="d-flex justify-content-between align-items-center">
    <h1>@yield('title')</h1>
    <a href="{{ route('admin.projects.create') }}" class="btn btn-primary"
        >Ajouter un project</a
    >
</div>

<table class="table table-striped">
    <thead>
        <tr>
            <th>Project</th>
            <th class="text-end">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($projects as $project)
        <tr>
            <td>{{ $project->title }}</td>
            <td>
                <div class="d-flex gap-2 w-100 justify-content-end">
                    <a
                        href="{{ route('admin.projects.edit', $project) }}"
                        class="btn btn-primary"
                        >Editer</a
                    >
                    <form
                        action="{{ route('admin.projects.destroy', $project) }}"
                        method="post"
                    >
                        @csrf @method("delete")
                        <button class="btn btn-danger">Supprimer</button>
                    </form>
                </div>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection
