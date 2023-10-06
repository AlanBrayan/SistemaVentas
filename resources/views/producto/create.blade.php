<form action="{{ route('productos.store') }}" method="POST">
    @csrf

    <div class="form-group">
        <label for="nombre">Nombre</label>
        <input type="text" class="form-control" name="nombre" id="nombre" aria-describedby="helpId" placeholder="">
    </div>
    <div class="form-group">
        <label for="precio">Precio</label>
        <input type="number" class="form-control" name="precio" id="precio" aria-describedby="helpId" placeholder="">
    </div>


    <div class="form-group">
        <label for="negocio_id">Negocio</label>
        <select class="form-control" name="negocio_id" id="negocio_id">
            @foreach ($negocios as $negocio)
                <option value="{{ $negocio->id }}">{{ $negocio->nombre }}</option>
            @endforeach
        </select>
    </div>

    <button type="submit">Enviar</button>
</form>
