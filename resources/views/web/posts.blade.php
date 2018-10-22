@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-md-8 offset-md-2">
        <h1>lista de articulas</h1>
        
        @foreach($posts as $post)
        
        <div class="card">
            <div class="card-header">
                {{$post->name}}
            </div>
            <div class="card-body">
                @if($post->file)
                <div class=" text-center">
                    <img src="{{$post->file}}" alt="" class="img-fluid">
                </div>
                @endif
                {{$post->excerpt}}
                <a href="{{route('post',$post->slug)}}" class="float-right">Leer más...</a>
            </div>
        </div>
        
        @endforeach
        
        {{$posts->render()}}
    </div>
</div>
@endsection