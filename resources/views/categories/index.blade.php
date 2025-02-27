@extends('layout.main')
@section('title')
<title>Liste des categories</title>
@endsection
@section('main')
<h1>Catégories</h1>

    <a href="{{ route('categories.create') }}">Créer une catégorie</a>

    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Restaurant</th>
                <th>actions</th>
                
            </tr>
        </thead>
        <tbody>
            @foreach($categories as $categorie)
                <tr>
                    <td>{{ $categorie->id }}</td>
                    <td>{{ $categorie->name }}</td>
                    <td><a href="{{route ('restaurants.show',$categorie->restaurant->id)}}">{{$categorie->restaurant->name}}</a></td>
                    <td>
                        <a href="{{ route ('categories.show',$categorie->id)}}">Voir</a>
                        <a href="{{ route ('categories.edit',$categorie->id)}}">Modifier</a>
                        <form action="{{ route('categories.destroy', $categorie->id) }}" method="POST">
                                @csrf
                                @method('delete')
                                <input type="hidden" name="id" value="{{ $categorie->id }}">
                                <button type="submit">Supprimer</button>
                            </form>
                    </td>
                    
                </tr>
            @endforeach
        </tbody>
    </table>


@endsection


