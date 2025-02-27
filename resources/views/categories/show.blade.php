@extends('layout.main')

@section('main')
    <h1>Restaurants</h1>

    <a href="{{ route('categories.index') }}">Retour à la liste</a>
    <a href="{{ route('categories.create') }}">Créer un restaurant</a>

    <ul>
        <li>id : {{ $categories->id }}</li>
        <li>nom : {{ $categories->name }}</li>
        <li>created_at : {{ $categories->created_at }}</li>
        <li>updated_at : {{ $categories->updated_at }}</li>
    </ul>
        <h2>restaurant : {{ $categories->restaurant->name }}</h2>
@endsection