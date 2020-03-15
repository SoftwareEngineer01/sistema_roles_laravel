<div class="form-group">
    {{ Form::label('name', 'Nombre del Producto') }}
    {{ Form::text('name', null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
    {{ Form::label('description', 'Descripción del Producto') }}
    {{ Form::text('description', null, ['class' => 'form-control']) }}
</div>

<div class="form-group">   
    {{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
    <button class="btn btn-sm btn-danger "><a style="color:white; text-decoration:none" href="{{ route('products.index') }}">Cancelar</a></button>
</div>

