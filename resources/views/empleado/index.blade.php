@extends('layouts.app')
{{-- @section('htmlheader_title')
	Home
@endsection --}}



@section('main-content')
@if(Session::has('message'))
	<div class="alert alert-success alert-dismissible" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
  		{{Session::get('message')}}
	</div>
@endif

@if(Session::has('message-errors'))
	<div class="alert alert-danger alert-dismissible" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
  		{{Session::get('message-errors')}}
	</div>
@endif


	<div class="containers">
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">Empleados</div>

					<div class="panel-body">
						<div class="container-fluid">
							<div class="row">
								<div class="col-sm-offset-11 col-sm-1">
									<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-registrar-empleado">
										Nuevo
									</button>
								</div>
							</div>
							<br/>
							<div class="row">
								<div class="col-sm-12">
									<div class="table-responsive">
										<table class='table table-striped table-condensed table-hover table-responsive'>
											<tr>
												<th>Nombre</th>
												<th>Apellido</th>
												<th>Cedula</th>
												<th>Telefono</th>
												<th>Cargo</th>
												<th>Opción</th>
											</tr>
											<tbody class="table-hover">
												@foreach ($empleados as $empleado)
													<tr>
														<td>{{ $empleado->nombre_1 }}</td>
														<td>{{ $empleado->apellido_1 }}</td>
														<td>{{ $empleado->cedula }}</td>
														<td>{{ $empleado->telefono }}</td>
														<td>{{ $empleado->cargo }}</td>
														<td>
														<a c href="http://localhost:8000/empleado/{{$empleado->id}}/edit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
{{-- 														
															<a href="" id="{{ $empleado->id }}" onclick="mostrar(this.id);" title="Editar empleado" data-toggle="modal" data-target="#modal-edit-empleado"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
 --}}
															&nbsp;

															<a href="javascript:void(0);" onclick="destroyUser(this.id);" id="{{$empleado->id}}"><i class="fa fa-trash" aria-hidden="true" data-toggle="modal" data-target=".bs-example-modal-sm"></i></a>

															{!!Form::open( ['route' => ['empleado.destroy', $empleado->id], 'method'=>'DELETE','id'=>'form-destroy-'.$empleado->id ] )!!}
															{!!Form::close()!!}
{{-- 
															<a href="javascript:void(0);" id="{{$empleado->id}}"><i class="fa fa-trash" aria-hidden="true" data-toggle="modal" data-target=".bs-example-modal-sm"></i></a>
 --}}															

{{-- 
															<a href="javascript:void(0);" onclick="destroyUser(this.id);" id="{{$empleado->id}}"><i class="fa fa-trash" aria-hidden="true"></i></a>
--}}
														</td>
													</tr>
											    @endforeach
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	@include('empleado.modal-registrar')
	{{-- @include('empleado.modal-edit') --}}
	{{-- @include('empleado.modal-confirmar') --}}
@endsection
