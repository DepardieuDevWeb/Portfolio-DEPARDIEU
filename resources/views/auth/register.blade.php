@extends('auth.auth') @section('title', 'S\'inscrire | BRANHAM-Tabernacle')
@section('content')

<div class="auth-container my5">
    <h1 class="auth-title fade in">S'inscrire</h1>
    @include('shared.flash', ['message' => 'Une erreur est survenue, impossible
    d\'enregistrer votre inscription'])

    <form
        class="auth-form fade fade-1 in"
        action="{{ route($user->exists ? 'inscription.update' : 'inscription.store', $user) }}"
        method="post"
    >
        @csrf @method($user->exists ? 'put' : 'post') @include('shared.input',
        ['placeholder' => 'Jonh Doe', 'name' => 'name', 'label' => 'Nom
        d\'utilisateur', 'value' => $user->name]) @include('shared.input',
        ['placeholder' => 'jonhdoe@gmail.com', 'name' => 'email', 'label' =>
        'Email', 'value' => $user->email]) @include('shared.input', ['type' =>
        'password', 'name' => 'password', 'label' => 'Mot de passe'])
        @include('shared.input', ['type' => 'password', 'name' =>
        'password_confirmation', 'label' => 'Confirmer le mot de passe'])
        @if(Auth::user()->role->name === 'admin') @include('shared.select',
        ['name' => 'role_id', 'the_label' => true, 'label' => 'Role', 'options'
        => $roles, 'value' => $user->role()->pluck('id')]) @endif
        <button type="submit" class="btn btn-primary">S'inscrire</button>
    </form>
</div>

@endsection
