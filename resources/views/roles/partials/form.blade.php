<div class="form-group">
    {{ Form::label('name', 'Nombre del rol') }}
    {{ Form::text('name', null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
    {{ Form::label('slug', 'Slug del rol') }}
    {{ Form::text('slug', null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
    {{ Form::label('description', 'Descripción del Rol') }}
    {{ Form::text('description', null, ['class' => 'form-control']) }}
</div>

<hr>

<h3>Permiso especial</h3>

<div class="form-group">
    <label for="">{{ Form::radio('special', 'all-acess') }} Acceso total</label>
    <label for="">{{ Form::radio('special', 'no-acess') }} Ningún acceso</label>
</div>


<h3>Lista de permisos</h3>
<div class="form-group">
	<ul class="list-unstyled">
		@foreach($permissions as $permission)
	    <li>
	        <label>
				{{ Form::checkbox('permissions[]', $permission->id, null) }}
				{{ $permission->name }}
				<em>({{ $permission->description ?: 'Sin descripción' }})</em>
	        </label>
	    </li>
	    @endforeach
    </ul>
</div>

<div class="form-group">   
    {{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
    <button class="btn btn-sm btn-danger "><a style="color:white; text-decoration:none" href="{{ route('roles.index') }}">Cancelar</a></button>
</div>
