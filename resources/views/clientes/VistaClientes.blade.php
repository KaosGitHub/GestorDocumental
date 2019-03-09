@extends('layouts.master')

@section('contenido')
	<div class="row">
		<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
			<h3>Listado de Clientes <button class="btn btn-success" data-toggle="modal" data-target="#myModal">Nuevo</button></h3>
			@include('../modal')
		</div>
	</div>
	<br>
	<!--
	<div class="col-6 mb-5 " style="display: flex; width: 30%;">
		
			<input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
			
			<button type="button" class="btn btn-primary ml-1">Search</button>
		
	</div>
 	-->
 	<div class="row">
 		<div class="col" style="margin-left: 50px; margin-right: 50px;">
			<table class="table">
			  <thead class="thead-light">
			    <tr>
			      <th scope="col">Nombre</th>
			      <th scope="col">Telefono</th>
			      <th scope="col">Dirección</th>
			      <th scope="col">Provincia</th>
			      <th scope="col">Opciones</th>
			    </tr>
			  </thead>
			  <tbody class="tbody">
			  </tbody>
			</table>
		</div>
	</div>

	<script type="text/javascript">
		//una vez este todo cargado, llamara a los datos
		document.addEventListener('DOMContentLoaded', function(){
		    llamar_Datos();
		});

		/*
		con este script, llamaremos a la funcion que recoge datos (que esta en master),
		y los usaremos para crear la vista correspondiente (listado clientes)
		*/
		function llamar_Datos(){
			recoger_Datos();
			listadoClientes(datos_JSON);
		}
	</script>


			
@endsection



