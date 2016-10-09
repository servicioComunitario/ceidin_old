@extends('layouts.app')
{{-- @section('htmlheader_title')
	Home
@endsection --}}

@section('main-content')
	<div id='content-planilla' class="container-fluid well" style="background-color: white; ">
		<form class="">
			<div class="row">
				<div class="col-md-3">
					<h4>I. Datos del Alumno</h4>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12">
					<div class="field">
						{!! Form::label('','Apellidos y nombres: ', ['class' => '']) !!}
						<div class="">
							{!! Form::text('', null, ['class' => 'input-control input-80']); !!}
						</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12">
					<div class="field">
						{!! Form::label('','Lugar de nacimiento: ', ['class' => '']) !!}
						<div class="">
							{!! Form::text('', null, ['class' => 'input-control input-50']); !!}
						</div>

						{!! Form::label('','Fecha de nac: ', ['class' => 'space-left']) !!}
						<div class="">
							{!! Form::text('', null, ['class' => 'input-control input-20']); !!}
						</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12">
					<div class="field">
						{!! Form::label('','Edad: ', ['class' => '']) !!}
						<div class="">
							{!! Form::text('', null, ['class' => 'input-control input-5', 'disabled' => 'true']); !!}
						</div>

						{!! Form::label('','Años ', ['class' => 'space-left']) !!}

						<div class="">
							{!! Form::text('', null, ['class' => 'input-control input-5','disabled' => 'true']); !!}
						</div>

						{!! Form::label('','Meses Sexo: ', ['class' => 'space-left']) !!}

						{!! Form::select('cargo',["Masculino", 'Femenino'], (!empty($empleado->id_cargo)) ? $empleado->id_cargo : '' , ['placeholder' => 'Sexo', 'class' => '']); !!} 

						{{-- {!! Form::select('cargo',$cargos, (!empty($empleado->id_cargo)) ? $empleado->id_cargo : '' , ['placeholder' => 'Seleccione Cargo', 'class' => 'form-control']); !!} --}}

						{!! Form::label('','Procedencia: Prosecución esc: ', ['class' => 'space-left']) !!}
						{!! Form::text('', null, ['class' => 'input-control input-5']); !!}

						{!! Form::label('','Hogar: ', ['class' => 'space-left']) !!}
						{!! Form::text('', null, ['class' => 'input-control input-20']); !!}
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12">
					<div class="field">
						{!! Form::label('','Nombre del representante: ', ['class' => '']) !!}
						<div class="">
							{!! Form::text('', null, ['class' => 'input-control input-60']); !!}
						</div>

						{!! Form::label('','Cedula: ', ['class' => 'space-left']) !!}
						<div class="">
							{!! Form::text('', null, ['class' => 'input-control input-10']); !!}
						</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12">
					<div class="field">
						{!! Form::label('','Parentesco: ', ['class' => '']) !!}
						<div class="">
							{!! Form::text('', null, ['class' => 'input-control input-40']); !!}
						</div>

						{!! Form::label('','Dirección: ', ['class' => 'space-left']) !!}
						<div class="">
							{!! Form::text('', null, ['class' => 'input-control input-40']); !!}
						</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12">
					<div class="field">
						{!! Form::label('','Telfono cantv: ', ['class' => '']) !!}
						<div class="">
							{!! Form::text('', null, ['class' => 'input-control input-15']); !!}
						</div>

						{!! Form::label('','Celular: ', ['class' => 'space-left']) !!}
						<div class="">
							{!! Form::text('', null, ['class' => 'input-control input-15']); !!}
						</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12">
					<div class="field">
						{!! Form::label('','Documentos de identificación del niño(a): ', ['class' => '']) !!}

						<div class="">
							{!! Form::label('','Fotos: ', ['class' => 'space-left']) !!}
							{!! Form::checkbox('foto', 'value', false); !!}
						</div>

						<div class="">
							{!! Form::label('','Partida de nac.: ', ['class' => '']) !!}
							{!! Form::checkbox('foto', 'value', false); !!}
						</div>

						<div class="">
							{!! Form::label('','Tarjeta de vac.: ', ['class' => '']) !!}
							{!! Form::checkbox('foto', 'value', false); !!}
						</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12">
					<div class="field">
						<div class="">
							{!! Form::label('','Copia C.I. Madre: ', ['class' => '']) !!}
							{!! Form::checkbox('foto', 'value', false); !!}
						</div>

						<div class="">
							{!! Form::label('','Copia C.I. Padre: ', ['class' => '']) !!}
							{!! Form::checkbox('foto', 'value', false); !!}
						</div>

						<div class="">
							{!! Form::label('','Otros: ', ['class' => '']) !!}
							{!! Form::text('', null, ['class' => 'input-control input-50']); !!}
						</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12">
					<div class="field">
						<div class="">
							{!! Form::label('','Docente: ', ['class' => '']) !!}
							{!! Form::select('cargo',["Maria Emilia Rodriguez", 'Fernanda', 'Petra'], (!empty($empleado->id_cargo)) ? $empleado->id_cargo : '' , ['placeholder' => 'Docente', 'class' => '']); !!} 
						</div>

						<div class="">
							{!! Form::label('','Sección: ', ['class' => 'space-left-large']) !!}
							{!! Form::select('cargo',["A", 'B', 'C'], (!empty($empleado->id_cargo)) ? $empleado->id_cargo : '' , ['placeholder' => 'Seccion', 'class' => '']); !!} 
						</div>

						<div class="">
							{!! Form::label('','Turno: ', ['class' => 'space-left-large']) !!}
							{!! Form::select('cargo',["Mañana", 'Tarde'], (!empty($empleado->id_cargo)) ? $empleado->id_cargo : '' , ['placeholder' => 'Turno', 'class' => '']); !!} 
						</div>
					</div>
				</div>
			</div>


			<!--******************************* II. ANTECEDENTES FAMILIARES  *****************************-->
			<hr>
			<div class="row space-top">
				<div class="col-md-3">
					<h4>I. Antecedentes Familiares</h4>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12">
					<div class="field">
						{!! Form::label('','Nombre de la Madre: ', ['class' => '']) !!}
						<div class="">
							{!! Form::text('', null, ['class' => 'input-control input-60']); !!}
						</div>

						{!! Form::label('','Cedula: ', ['class' => 'space-left']) !!}
						<div class="">
							{!! Form::text('', null, ['class' => 'input-control input-10']); !!}
						</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12">
					<div class="field">
						<div class="">
							{!! Form::label('','Edad: ', ['class' => '']) !!}
							{!! Form::text('', null, ['class' => 'input-control input-10']); !!}
						</div>

						<div class="">
							{!! Form::label('','Nacionalidad: ', ['class' => 'space-left']) !!}
							{!! Form::text('', null, ['class' => 'input-control input-20']); !!}
						</div>

						<div class="">
							{!! Form::label('','Grado de instr.: ', ['class' => 'space-left']) !!}
							{!! Form::text('', null, ['class' => 'input-control input-35']); !!}
						</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12">
					<div class="field">
						{!! Form::label('','Ocupación: ', ['class' => '']) !!}
						<div class="">
							{!! Form::text('', null, ['class' => 'input-control input-90']); !!}
						</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12">
					<div class="field">
						{!! Form::label('','Direccion: ', ['class' => '']) !!}
						<div class="">
							{!! Form::text('', null, ['class' => 'input-control input-65']); !!}
						</div>

						{!! Form::label('','Telefono: ', ['class' => 'space-left']) !!}
						<div class="">
							{!! Form::text('', null, ['class' => 'input-control input-15']); !!}
						</div>
					</div>
				</div>
			</div>

			<!-- DATOS DEL PADRE -->

			<div class="row">
				<div class="col-md-12">
					<div class="field">
						{!! Form::label('','Nombre del padre: ', ['class' => '']) !!}
						<div class="">
							{!! Form::text('', null, ['class' => 'input-control input-60']); !!}
						</div>

						{!! Form::label('','Cedula: ', ['class' => 'space-left']) !!}
						<div class="">
							{!! Form::text('', null, ['class' => 'input-control input-10']); !!}
						</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12">
					<div class="field">
						<div class="">
							{!! Form::label('','Edad: ', ['class' => '']) !!}
							{!! Form::text('', null, ['class' => 'input-control input-10']); !!}
						</div>

						<div class="">
							{!! Form::label('','Nacionalidad: ', ['class' => 'space-left']) !!}
							{!! Form::text('', null, ['class' => 'input-control input-20']); !!}
						</div>

						<div class="">
							{!! Form::label('','Grado de instr.: ', ['class' => 'space-left']) !!}
							{!! Form::text('', null, ['class' => 'input-control input-35']); !!}
						</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12">
					<div class="field">
						{!! Form::label('','Ocupación: ', ['class' => '']) !!}
						<div class="">
							{!! Form::text('', null, ['class' => 'input-control input-90']); !!}
						</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12">
					<div class="field">
						{!! Form::label('','Direccion: ', ['class' => '']) !!}
						<div class="">
							{!! Form::text('', null, ['class' => 'input-control input-65']); !!}
						</div>

						{!! Form::label('','Telefono: ', ['class' => 'space-left']) !!}
						<div class="">
							{!! Form::text('', null, ['class' => 'input-control input-15']); !!}
						</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12">
					<div class="field">
						{!! Form::label('','Situación de la Pareja: ', ['class' => '']) !!}

						<div class="">
							{!! Form::label('','Armonica: ', ['class' => 'space-left']) !!}
							{!! Form::checkbox('', 'value', false); !!}
						</div>

						<div class="">
							{!! Form::label('','Separados: ', ['class' => '']) !!}
							{!! Form::checkbox('', 'value', false); !!}
						</div>

						<div class="">
							{!! Form::label('','Con quien vive el niño(a): ', ['class' => 'space-left']) !!}
							{!! Form::text('', null, ['class' => 'input-control input-25']); !!}
						</div>
					</div>
				</div>
			</div>



			



<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

		</form>
	</div>
@endsection
