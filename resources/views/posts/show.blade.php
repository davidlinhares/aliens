@extends('layouts.app')

@section('content')
	<div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>{{ $post->titulo }}</h1>
                <p>{{ $post->descricao }}</p>
                <a href="{{ route('posts') }}" class="btn btn-danger">Voltar</a>
            </div>
        </div>
    </div>
@endsection