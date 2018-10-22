<div class=" form-group">
    {{Form::label('name','Nombre de la etiqueta')}}
    {{Form::text('name',null,['class'=>'form-control','id'=>'name'])}}
</div>
<div class=" form-group">
    {{Form::label('slug','URL Amigable')}}
    {{Form::text('slug',null,['class'=>'form-control','id'=>'slug'])}}

</div>
<div class=" form-group">
    {{Form::submit('Guardar',['class'=>'btn-primary btn-sm'])}}
</div>