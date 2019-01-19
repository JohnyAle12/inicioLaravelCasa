@extends('layouts.plantilla')

<?php 
	$mensaje=Session::get('message');
?>

@if(Session::has('message'))


<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Holy Johny!</strong> {{Session::get('message')}}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>

@endif


@section('contenido')
	{!!link_to_route('usuarios.create', $title = 'Crear Usuario', $parameters ='', $attributes = ['class'=>'btn btn-success btn-sm']);!!}
	<table class="table">
		<thead>
			<th>Nombre</th>
			<th>Correo</th>
			<th>Operacion</th>
		</thead>
		@foreach($users as $user)
		<tbody>
			<td>{{$user->name}}</td>
			<td>{{$user->email}}</td>
			<td>
				{!!link_to_route('usuarios.edit', $title = 'Actualizar', $parameters = $user->id, $attributes = ['class'=>'btn btn-success btn-sm']);!!}
			</td>
		</tbody>
		@endforeach
	</table>
	

@stop