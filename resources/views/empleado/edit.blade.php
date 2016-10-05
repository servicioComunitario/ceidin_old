@extends('layouts.app')
@section('main-content')
	{!!Form::model($empleado, ['route' => ['empleado.update', $empleado->id], 'method' => 'PUT', 'class'=>'form-horizontal' ] )!!}
	  <div class="modal-body">

	    @include('forms.datos-personales')
	    <input type="hidden" name="_token" value="{{csrf_token()}}" id="token-add-empleado" >
	    @include('empleado.forms.cargo')

	  </div>
	  <div class="modal-footer">
	  	{!!Form::submit('Actualizar Empleado', ['class'=>'btn btn-primary'])!!}
	    {!! link_to_route('empleado.index', $title = 'Cancelar', $parameters = [], $attributes = ['class'=>'btn btn-danger']) !!}


{{-- 
	    {!! link_to('#', $title='Editar empleado', $attribute=['id'=>'editar-empleado', 'class'=>'btn btn-primary'], $secure = null ) !!}
	    <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
--}}
	  </div>
	{!!Form::close()!!}

@stop