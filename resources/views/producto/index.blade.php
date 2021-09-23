@extends('layouts.plantilla');

@section('contenido')
<div align="right">
<a href="productos/create" class="btn btn-info btn-lg"><b>AGREGAR PRODUCTO </b></a>
</div>

<div>
<table class="table table-hover">
        <thead class="thead-inverse">
            <tr>
              <th scope="col">Id</th>
              <th scope="col">Producto</th>
              <th scope="col">Marca</th>
              <th scope="col">Descripcion</th>
              <th scope="col">Precio Costo</th>
              <th scope="col">Precio Venta</th>
              <th scope="col">Existencias</th>
              <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
             @foreach($productos as $producto)
            <tr>
                <td>{{$producto->id}}</td>
                <td>{{$producto->producto}}</td>
                <td>{{$producto->idMarca}}</td>
                <td>{{$producto->descripcion}}</td>
                <td>{{$producto->precio_costo}}</td>
                <td>{{$producto->precio_venta}}</td>
                <td>{{$producto->existencia}}</td>
                <td>
                    <form action ="{{ route ('productos.destroy',$producto->id)}}" method="POST">
                    <a href="/productos/{{$producto->id}}/edit" class="btn btn-success"><b>Modificar</b></a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger"><b>Eliminar</b></button>
                    </form>
                </td>

            </tr>
    @endforeach
    </tbody>
</table>
</div>


@endsection