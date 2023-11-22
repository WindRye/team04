<html>

<head>
    <title>列出所有寶可夢</title>
</head>

<body>
<h1>列出所有寶可夢</h1>

@for($i=0; $i<count($pokemons); $i++)
    {{$pokemons[$i]['pokemon'] }}<br/>
    {{$pokemons[$i]['region'] }}<br/>
    {{$pokemons[$i]['gender'] }}<br/>
    {{$pokemons[$i]['ability'] }}<br/>
    {{$pokemons[$i]['height'] }}<br/>
    {{$pokemons[$i]['weight'] }}<br/><br/>
@endfor


</body>
</html>