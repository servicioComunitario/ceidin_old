<!-- Modal -->
<div class="modal fade" id="modal-edit-empleado" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title text-center" id="myModalLabel">Registro Empleado</h4>
      </div>
      {!! Form::model($empleado, ['route' => ['empleado.update', $empleado->id], 'method' => 'PUT', 'id'=>'form-edit-empleado', 'class'=>'form-horizontal' ] ) !!}
        <div class="modal-body">

          @include('forms.datos-personales')
          <input type="hidden" name="_token" value="{{csrf_token()}}" id="token-add-empleado" >
          @include('empleado.forms.cargo')

        </div>
        <div class="modal-footer">
          {!! link_to('#', $title='Editar empleado', $attribute=['id'=>'editar-empleado', 'class'=>'btn btn-primary'], $secure = null ) !!}
          <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
        </div>
      {!!Form::close()!!}
    </div>
  </div>
</div>

    
  