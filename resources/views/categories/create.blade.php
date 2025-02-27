@extends('layout.main')
@section('title')
<title>Creer une categorie</title>

@endsection
@section('main')


<h1>Creation de Categorie</h1>
    <a href="{{ route('categories.index')}}">Liste des catégories</a>

    <form action="{{ route('categories.store') }}" method="POST">
        @csrf
        <label for="name">Nom : </label>
        <input type="text" id="name" name="name" placeholder="name">

        <label for="restaurant_id">Restaurant</label>
        <select name="restaurant_id" id="">
            <option value="">Choisir un restuarant</option>

            @foreach($restaurants as $restaurant)
                <option value="{{$restaurant->id}}">{{$restaurant->name}}</option>
            @endforeach
            
        </select>
        <button type="submit">Envoyer</button>
    </form>


@endsection