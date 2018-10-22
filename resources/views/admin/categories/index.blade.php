@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 offset-md-1">
            <div class="card">
                <div class="card-header">
                Lista de Categorias
                    <a href="{{route('categories.create')}}" class="btn-primary btn-sm float-right">Crear</a>
                </div>
                <div class="card-body">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th with="10px">ID</th>
                                <th>Nombre</th>
                                <th colspan="3">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($categories as $category)
                            <tr>
                                <td>{{$category->id}}</td>
                                <td>{{$category->name}}</td>
                                <td width="10px">
                                    <a href="{{route('categories.show',$category->id)}}" class="btn-secondary btn-sm">ver</a>
                                </td>
                                <td width="10px">
                                    <a href="{{route('categories.edit',$category->id)}}" class="btn-secondary btn-sm">editar</a>
                                </td>
                                <td width="10px">
                                    {!! Form::open(['route'=>['categories.destroy',$category->id],'method'=>'DELETE']) !!}
                                    <button class="btn-sm btn-danger">Eliminar</button>
                                    {!! Form::close() !!}
                                </td>
                            </tr>    
                            @endforeach
                        </tbody>
                    </table>
                    <div class=" text-center">
                        {{$categories->render()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection