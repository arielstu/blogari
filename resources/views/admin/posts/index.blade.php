@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 offset-md-1">
            <div class="card">
                <div class="card-header">
                Lista de Entradas
                    <a href="{{route('posts.create')}}" class="btn-primary btn-sm float-right">Crear</a>
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
                            @foreach($posts as $post)
                            <tr>
                                <td>{{$post->id}}</td>
                                <td>{{$post->name}}</td>
                                <td width="10px">
                                    <a href="{{route('posts.show',$post->id)}}" class="btn-secondary btn-sm">ver</a>
                                </td>
                                <td width="10px">
                                    <a href="{{route('posts.edit',$post->id)}}" class="btn-secondary btn-sm">editar</a>
                                </td>
                                <td width="10px">
                                    {!! Form::open(['route'=>['posts.destroy',$post->id],'method'=>'DELETE']) !!}
                                    <button class="btn-sm btn-danger">Eliminar</button>
                                    {!! Form::close() !!}
                                </td>
                            </tr>    
                            @endforeach
                        </tbody>
                    </table>
                    <div class=" text-center">
                        {{$posts->render()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection