<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Creation restaurant</title>
</head>
<body>
    <h1>Creation restaurant</h1>
    <a href="{{ route('restaurants.index')}}">Restaurants</a>
    <form action="{{ route('restaurants.store') }}" method="POST">
        @csrf
        <label for="name">Nom : </label>
        <input type="text" id="name" name="name" placeholder="Nom">
        <button type="submit">Envoyer</button>
    </form>

</body>
</html>