<form action="{{ route('productos.store') }}" method="POST" enctype="multipart/form-data">

    @csrf

    <div class="form-group">
        <label for="nombre">Nombre</label>
        <input type="text" class="form-control" name="nombre" id="nombre" aria-describedby="helpId" placeholder="">
    </div>
    @error('nombre')
    <div style="color: red">{{ $message }}</div>
    @enderror
    <div class="form-group">
        <label for="precio">Precio</label>
        <input type="number" class="form-control" name="precio" id="precio" aria-describedby="helpId" placeholder="">
    </div>
    @error('precio')
    <div style="color: red">{{ $message }}</div>
    @enderror
    <div class="form-group">
        <label for="precio">Imagen</label>
        <input type="file" class="form-control" name="imagen" id="imagen" aria-describedby="helpId" placeholder="">
    </div>
    @error('imagen')
    <div style="color: red">{{ $message }}</div>
    @enderror
    <div class="form-group">
        <label for="negocio_id">Negocio</label>
        <select class="form-control" name="negocio_id" id="negocio_id">
            @foreach ($negocios as $negocio)
                <option value="{{ $negocio->id }}">{{ $negocio->nombre }}</option>
            @endforeach
        </select>
    </div>
    @error('negocio_id')
    <div style="color: red">{{ $message }}</div>
    @enderror

    
    <button type="submit">Enviar</button>
</form>
