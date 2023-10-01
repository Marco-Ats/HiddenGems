<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Listado</h1>
    <ul>
        @foreach($compradores as $comprador)
        <li>{{$comprador->nombre_completo}}</li>
        @endforeach
    </ul>
</body>
</html>