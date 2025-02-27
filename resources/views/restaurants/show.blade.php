@extends('layout.main')

@section('main')
    <h1>Restaurants</h1>

    <a href="{{ route('restaurants.index') }}">Retour à la liste</a>
    <a href="{{ route('restaurants.create') }}">Créer un restaurant</a>

    <ul>
        <li>id : {{ $restaurants->id }}</li>
        <li>nom : {{ $restaurants->name }}</li>
        <li>created_at : {{ $restaurants->created_at }}</li>
        <li>updated_at : {{ $restaurants->updated_at }}</li>
    </ul>
    <h2>Categories</h2>
    @foreach($restaurant->categorie as $category)
        <li>
            <a href="{{route ('categories.show',category->id)}}" title="voir les categories">{{$category->name}}</a>
        </li>

    @endforeach


@endsection