<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Restaurants</title>
</head>
<body>
    <h1>Restaurants</h1>

    <a href="{{ route('restaurants.create') }}">Créer un restaurant</a>

    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Modifications</th>
            </tr>
        </thead>
        <tbody>
            @foreach($restaurants as $restaurant)
                <tr>
                    <td>{{ $restaurant->id }}</td>
                    <td>{{ $restaurant->name }}</td>
                    <td>
                        <a href="{{ route ('restaurants.show',$restaurant->id)}}">Voir</a>
                        <a href="{{ route ('restaurants.edit',$restaurant->id)}}">Modifier</a>
                        <form action="{{ route('restaurants.destroy', $restaurant->id) }}" method="POST">
                                @csrf
                                @method('delete')
                                <input type="hidden" name="id" value="{{ $restaurant->id }}">
                                <button type="submit">Supprimer</button>
                            </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>