@extends('admin.base') @section('title', 'Toutes les technologies')
@section('content')

<div class="d-flex justify-content-between align-items-center">
    <h1>@yield('title')</h1>
    <a href="{{ route('admin.technologies.create') }}" class="btn btn-primary"
        >Ajouter une technologie</a
    >
</div>

<table class="table table-striped">
    <thead>
        <tr>
            <th>Nom</th>
            <th class="text-end">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($technologies as $technology)
        <tr>
            <td>{{ $technology->name }}</td>
            <td>
                <div class="d-flex gap-2 w-100 justify-content-end">
                    <a
                        href="{{
                            route('admin.technologies.edit', $technology)
                        }}"
                        class="btn btn-primary"
                        >Editer</a
                    >
                    <form
                        action="{{
                            route('admin.technologies.destroy', $technology)
                        }}"
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
