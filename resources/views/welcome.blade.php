@extends('layouts.app')

@section('content')
    @guest
        <div class="content">
            <div class="title m-b-md">
                Aliens Project
            </div>
            <div class="links">
                <a href="{{ route('login') }}" class="btn btn-primary">Login</a>
                <a href="{{ route('register') }}" class="btn btn-success">Register</a>
            </div>
        </div>
    @else
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h1>Posts</h1>
                    <div class="panel panel-default">
                        <div class="panel-heading">Título do post</div>
                        <div class="panel-body">
                            <p>Lorem ipsum dolor...</p>
                            <a href="#!" class="btn btn-primary">Leia mais</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <h1>Opções</h1>
                    <a href="{{ route('postCreate') }}" class="btn btn-success">Novo Post</a>
                </div>
            </div>
        </div>
    @endif
@endsection
