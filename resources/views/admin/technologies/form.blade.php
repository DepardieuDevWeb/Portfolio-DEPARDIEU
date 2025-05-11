@extends('admin.base') @section('title', $technology->exists ? "Editer une
technologie" : "Créer une technologie") @section('content')

<h1>@yield('title')</h1>

<form
    class="vstack gap-2"
    action="{{ route($technology->exists ? 'admin.technologies.update' : 'admin.technologies.store', $technology) }}"
    method="post"
>
    @csrf @method($technology->exists ? 'put' : 'post') @include('shared.input',
    ['name' => 'name', 'label' => 'Nom', 'value' => $technology->name])

    <div>
        <button class="btn btn-primary">
            @if($technology->exists) Modifier @else Créer @endif
        </button>
    </div>
</form>

@endsection
