<html>
<head>
    <title>列出所有寶可夢</title>
</head>
<body>
<h1>列出所有寶可夢</h1>
<table>
    <tr>
        <th>編號</th>
        <th>寶可夢</th>
        <th>地區</th>
        <th>屬性編號1</th>
        <th>屬性編號2</th>
        <th>身高</th>
        <th>體重</th>
        <th>性別</th>
        <th>特性</th>
        <th>操作1</th>
        <th>操作2</th>
        <th>操作3</th>
    </tr>
    @for($i=0; $i<count($pokemons);$i++)
        <tr>
            <td>{{ $pokemons[$i]['id'] }}</td>
            <td>{{ $pokemons[$i]['pokemon'] }}</td>
            <td>{{ $pokemons[$i]['region'] }}</td>
            <td>{{ $pokemons[$i]['tid1'] }}</td>
            <td>{{ $pokemons[$i]['tid2'] }}</td>
            <td>{{ $pokemons[$i]['height'] }}</td>
            <td>{{ $pokemons[$i]['weight'] }}</td>
            <td>{{ $pokemons[$i]['gender'] }}</td>
            <td>{{ $pokemons[$i]['ability'] }}</td>
            <td><a href="{{ route('pokemons.show', ['id'=>$pokemons[$i]['id']]) }}">顯示</a></td>
            <td><a href="{{ route('pokemons.edit', ['id'=>$pokemons[$i]['id']]) }}">修改</a></td>    
            <td>刪除</td>    
        </tr>
    @endfor
<table>


</body>
</html>