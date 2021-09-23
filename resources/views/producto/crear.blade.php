@extends('layouts.plantilla');

@section('contenido')
<h2>Agregar Productos</h2>

<form action="/productos" method="POST">
@csrf
          <div class="mb-3">
          <label for="lbl_producto" class="form-label"><b>Nombre Producto</b></label>
          <input type="text" name="txt_producto" id="txt_producto" class="form-control" placeholder="Producto.. ">
          </div>

          <div class="mb-3">
          <label for="lbl_marca" class="form-label"><b>Marca</b></label>
          <input type="text" name="txt_marca" id="txt_marca" class="form-control" placeholder="1= Kellogs,  2=INA ">
          </div>

          <div class="mb-3">
          <label for="lbl_descripcion" class="form-label"><b>Descripcion</b></label>
          <input type="text" name="txt_descripcion" id="txt_descripcion" class="form-control" placeholder="Productos en tal presentacion ">
          </div>

          <div class="mb-3">
          <label for="lbl_precio_c" class="form-label"><b>Precio Costo</b></label>
          <input type="text" name="txt_precio_c" id="txt_precio_c" class="form-control" placeholder="Precio al que Compramos">
          </div>

          <div class="mb-3">
          <label for="lbl_precio_v" class="form-label"><b>Precio Venta</b></label>
          <input type="text" name="txt_precio_v" id="txt_precio_v" class="form-control" placeholder="Precio al publico">
          </div>

          <div class="mb-3">
          <label for="lbl_existencia" class="form-label"><b>Existencia</b></label>
          <input type="text" name="txt_existencia" id="txt_existencia" class="form-control" placeholder="Cantidad en Stock">
          </div>


          <div class="mb-3">
          <input type="submit" name="btn_agregar" id="btn_agregar" class="btn btn-outline-success" value="Agregar">
          <a href="/productos"  class="btn btn-outline-danger" tabindex="1">CANCELAR</a>
          </div>
</form>

@endsection