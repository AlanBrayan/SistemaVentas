<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    
 <div class="container">
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Negocio</th>
                <th>Acciones</th>
            </tr>
        </thead>
        @foreach ($productos as $producto)
            
        
        <tbody>
            <tr>
                <td scope="row">{{ $producto->id }}</td>
                <td> {{ $producto->nombre }} </td>
                <td> {{ $producto->precio }} </td>
                <td> {{ $producto->productos->nombre }} </td>

                <td>Acciones</td>
            </tr>
        </tbody>
        @endforeach
    </table>
 </div>

</body>
</html>