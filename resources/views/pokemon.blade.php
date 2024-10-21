<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $pokemon['name'] }}</title>
</head>
<body>
    <h1>{{ ucfirst($pokemon['name']) }}</h1>
    <img src="{{ $pokemon['sprites']['front_default'] }}" alt="{{ $pokemon['name']}}">
    <h2>Stats</h2>
    <ul>
        @foreach($pokemon['stats'] as $stat)
            <li>{{ $stat['stat']['name'] }}: {{ $stat['base_stat'] }}</li>
        @endforeach
    </ul>

    <h2>Abilities</h2>
    <ul>
        @foreach($pokemon['abilities'] as $ability)
            <li>{{ $ability['ability']['name'] }}</li>
        @endforeach
    </ul>
</body>
</html>