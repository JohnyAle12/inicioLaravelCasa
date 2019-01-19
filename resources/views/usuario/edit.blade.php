@extends('layouts.plantilla')


@section('contenido')
	
	{!!Form::model($user, ['route'=>['usuarios.update', $user->id], 'method'=>'PUT'])!!}
		<div class="form-group">
			{!!Form::label('Nombre:')!!}
			{!!Form::text('name',null,['class'=>'form-control', 'placeholder'=>'Ingrese el nombre'])!!}
		</div>
		<div class="form-group">
			{!!Form::label('Correo:')!!}
			{!!Form::text('email',null,['class'=>'form-control', 'placeholder'=>'Ingrese el correo'])!!}
		</div>
		{!!Form::submit('Editar',['class'=>'btn btn-success btn-sm'])!!}
	{!!Form::close()!!}

	{!!Form::open(['route'=>['usuarios.destroy', $user->id], 'method'=>'DELETE'])!!}
		{!!Form::submit('Eliminar',['class'=>'btn btn-danger btn-sm'])!!}
	{!!Form::close()!!}
	

@stop