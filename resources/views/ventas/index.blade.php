<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
      <title>Document</title>
   </head>
   </head>
   <body>
      Sistema Home
      <div class="container">
         <form action="{{ route('ventas.store') }}" method="post">
            @csrf
            <div class="form-group">
               <label for="negocio">Negocio</label>
               <select class="form-control" name="negocio" id="negocio">
                  @foreach ($negocios as $negocio)
                  <option value="{{ $negocio->id }}">{{ $negocio->nombre }}</option>
                  @endforeach
               </select>
            </div>
            <div class="form-group">
               <label for="producto">Producto</label>
               <select class="form-control" name="producto" id="producto">
                  @foreach ($productos as $producto)
                  <option value="{{ $producto->id }}" data-negocio="{{ $producto->negocio_id }}" data-precio="{{ $producto->precio }}">{{ $producto->nombre }}</option>
                  @endforeach
               </select>
            </div>
            <div class="form-group" id="precio">
               <label for="precio">Precio:</label>
               <span id="precio-value">Seleccione un producto para ver el precio.</span>
            </div>
            <br>
            <div class="form-group" id="cantidad">
               <label for="cantidad">Cantidad</label>
               <input type="number" name="cantidad" id="cantidad-input" min="1" value="1">
            </div>
            <input type="hidden" name="precioTotal" id="total-value-input">
            <div class="form-group" id="precioTotal">
               <label for="total">Total:</label>
               <span id="total-value">$0.00</span>
            </div>
            <button type="submit">Guardar</button>
         </form>
      </div>
      <script>
         $(document).ready(function() {
             $('#negocio').change(function() {
                 var selectedNegocioId = $(this).val();
                 $('#producto option').each(function() {
                     var productoNegocioId = $(this).data('negocio');
                     if (selectedNegocioId == productoNegocioId || selectedNegocioId === "") {
                         $(this).show();
                     } else {
                         $(this).hide();
                     }
                 });
             });
         
             $('#producto').change(function() {
                 var selectedPrecio = $(this).find(':selected').data('precio');
                 $('#precio-value').text(selectedPrecio);
             });
         });
         
         $(document).ready(function() {
         
         $('#cantidad-input').change(function() {
             actualizarPrecio();
         });
         });
         
         $('#producto').on('change', function () {
         actualizarPrecio();
         });
         
         $('#cantidad-input').on('input', function () {
         actualizarPrecio();
         });
         
         function actualizarPrecio() {
         var selectedProducto = $('#producto').find(':selected');
         var precio = selectedProducto.data('precio');
         var cantidad = parseInt($('#cantidad-input').val());
         
         if (!isNaN(cantidad) && cantidad > 0) {
         var total = precio * cantidad;
         $('#total-value').text('$' + total.toFixed(2));
         $('#total-value-input').val(total); // Establece el valor en el campo oculto
         } else {
         $('#total-value').text('Seleccione un producto y cantidad válida.');
         $('#total-value-input').val(''); // Limpia el valor si no es válido
         }
         }
         
         
         
      </script>
   </body>
</html>
