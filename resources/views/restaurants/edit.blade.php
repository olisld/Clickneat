@extends('layout.main')
@section('title')

    <title>Modifier un restaurant</title>

@endsection
@section('main')
    <h1>Modifier le restaurant</h1>

    <a href="{{ route('restaurants.index') }}">Retour à la liste</a>

    <form action="{{ route('restaurants.update', $restaurants->id) }}" method="POST">
        @csrf
        @method('put')
        <label for="name">Nom : </label>
        <input type="text" id="name" name="name" placeholder="Nom" value="{{ $restaurants->name }}">
        <button type="submit">Envoyer</button>
    </form>
@endsection