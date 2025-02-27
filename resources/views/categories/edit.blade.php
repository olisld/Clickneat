@extends('layout.main')
@section('title')
<title>Modifeier une categorie</title>
@endsection
@section('main')
    <h1>Modifier une categorie</h1>

    <a href="{{ route('categories.index') }}">Retour à la liste</a>

    <form action="{{ route('categories.update', $categories->id) }}" method="POST">
        @csrf
        @method('put')
        <label for="name">Nom : </label>
        <input type="text" id="name" name="name" placeholder="Nom" value="{{ $categories->name }}">
        <select name="restaurant_id" id="">
            @foreach($restaurants as $restaurant)
                @if($restaurant->id === $categories->restaurant->id)
                    <option value="{{$restaurant->id}}" selected='selected'>{{$restaurant->name}}</option>
                @else
                    <option value="{{$restaurant->id}}">{{$restaurant->name}}</option>
                @endif
            @endforeach
            
            
        </select>
        <button type="submit">Envoyer</button>
    </form>
@endsection