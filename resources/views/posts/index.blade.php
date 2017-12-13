@extends('layouts.app')

@section('content')
	<div class="container">
        <div class="row">
            <div class="col-md-8">
                <h1>Posts</h1>
                @foreach($posts as $post)
                	@include('layouts.post')
                @endforeach
            </div>
            <div class="col-md-4">
                <h1>Opções</h1>
                <a href="{{ route('postCreate') }}" class="btn btn-success">Novo Post</a>
            </div>
        </div>
    </div>
@endsection