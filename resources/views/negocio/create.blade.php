<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear negocios</title>
</head>
<body>
    <form action="{{ route('negocios.store') }}" method="POST">
        @csrf
        <div class="form-group">
          <label for="">Nombre</label>
          <input type="text" class="form-control" name="nombre" id="" aria-describedby="helpId" placeholder="">
            <button type="submit">Guardar</button>
        </div>
    </form>
</body>
</html>