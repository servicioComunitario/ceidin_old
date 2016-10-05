<h4>Datos Empleado</h4>

<div class="form-group">
	{!! Form::label('nombre','Cargo', ['class' => 'col-sm-4 control-label ']) !!}
	<div class="col-sm-8">

		{!! Form::select('cargo',$cargos, (!empty($empleado->id_cargo)) ? $empleado->id_cargo : '' , ['placeholder' => 'Seleccione Cargo', 'class' => 'form-control']); !!} 

{{-- 
		@if (empty($empleado->id_cargo))
		    {{ Form::select('cargo', $cargos, '', ['placeholder' => 'Seleccione Cargo', 'class' => 'form-control']) }}
		@else
		    {{ Form::select('cargo', $cargos, $empleado->id_cargo, ['placeholder' => 'Seleccione Cargo', 'class' => 'form-control']) }}
		@endif
 --}}

	</div>
</div>



{{-- 
<select name="cargo" class="form-control" >
	<option>Seleccione Cargo</option>
	@for ($i = 0; $i < count($cargos); $i++)
		@if($empleado->cargo == $cargos[$i]->nombre )
			<option value="{{ $cargos[$i]->id }}" selected>
			    {{ $cargos[$i]->nombre }}
			</option>
		@else
			<option value="{{ $cargos[$i]->id }}">
			    {{ $cargos[$i]->nombre }}
			</option>
		@endif
	@endfor
</select>
 --}}

{{--  {{  Form::select('cargo', $cargos, 'l') }}

 {!! Form::select('cargo',$cargos, null, ['placeholder' => 'Seleccione Cargo', 'class' => 'form-control']); !!} --}}

{{-- <a href="" class="{{ ( ! empty($data['name'] ? 'nameset' : 'namenotset') }}"> --}}
