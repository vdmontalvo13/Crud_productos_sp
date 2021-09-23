@extends('layouts.plantilla');

@section('contenido')
<h2>Editar un Productos</h2>

<form action="/productos/{{$producto->id}}" method="POST">
@csrf
@method('PUT')
          <div class="mb-3">
          <label for="lbl_producto" class="form-label"><b>Nombre Producto</b></label>
          <input type="text" name="txt_producto" id="txt_producto" class="form-control" placeholder="Producto.. " value="{{$producto->producto}}">
          </div>

          <div class="mb-3">
          <label for="lbl_marca" class="form-label"><b>Marca</b></label>
          <input type="text" name="txt_marca" id="txt_marca" class="form-control" placeholder="1= Kellogs,  2=INA " value="{{$producto->idMarca}}">
          </div>

          <div class="mb-3">
          <label for="lbl_descripcion" class="form-label"><b>Descripcion</b></label>
          <input type="text" name="txt_descripcion" id="txt_descripcion" class="form-control" placeholder="Productos en tal presentacion " value="{{$producto->descripcion}}">
          </div>

          <div class="mb-3">
          <label for="lbl_precio_c" class="form-label"><b>Precio Costo</b></label>
          <input type="text" name="txt_precio_c" id="txt_precio_c" class="form-control" placeholder="Precio al que Compramos" value="{{$producto->precio_costo}}">
          </div>

          <div class="mb-3">
          <label for="lbl_precio_v" class="form-label"><b>Precio Venta</b></label>
          <input type="text" name="txt_precio_v" id="txt_precio_v" class="form-control" placeholder="Precio al publico" value="{{$producto->precio_venta}}">
          </div>

          <div class="mb-3">
          <label for="lbl_existencia" class="form-label"><b>Existencia</b></label>
          <input type="text" name="txt_existencia" id="txt_existencia" class="form-control" placeholder="Cantidad en Stock" value="{{$producto->existencia}}">
          </div>


          <div class="mb-3">
          <input type="submit" name="btn_agregar" id="btn_agregar" class="btn btn-outline-success" value="Modificar">
          <a href="/productos"  class="btn btn-outline-danger" tabindex="1">CANCELAR</a>
          </div>
</form>

@endsection