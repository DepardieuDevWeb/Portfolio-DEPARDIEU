@extends('auth.auth') @section('title', 'Se connecter | Pascal Depardieu')
@section('content')

<div class="auth-container my5">
    <div class="auth-container-content">
        <h1 class="auth-title fade in">Se connecter</h1>
        @include('shared.flash')

        <form
            class="auth-form fade fade-1 in"
            action="{{ route('login') }}"
            method="post"
        >
            @csrf @include('shared.input', ['type' => 'text', 'placeholder' =>
            'jonhdoe@gmail.com', 'name' => 'email', 'label' => 'Email'])
            @include('shared.input', ['type' => 'password', 'name' =>
            'password', 'label' => 'Mot de passe'])
            <button type="submit" class="btn btn-primary">Se connecter</button>
        </form>
    </div>
</div>

@endsection
