@extends('layouts.app')

@section('content')
    <div class="container">
    	<h1>Publicar</h1>
        <form class="form-horizontal" method="POST" action="{{ route('postStore') }}">
        	{{ csrf_field() }}
            <div class="form-group">
                <label for="titulo">Título</label>
                <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Digite o titulo" required>
            </div>
            <div class="form-group">
                <label for="descricao">Descrição</label>
                <input type="text" class="form-control" id="descricao" placeholder="Digite a descrição" name="descricao" required>
            </div>
            <button type="submit" class="btn btn-primary">Salvar</button>
            <a href="{{ route('posts') }}" class="btn btn-danger">Cancelar</a>
        </form>
    </div>
</div>
@endsection