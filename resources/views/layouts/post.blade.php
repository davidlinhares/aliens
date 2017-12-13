					<div class="panel panel-default">
                        <div class="panel-heading">{{ $post->titulo }} - {{ $post->created_at->diffForHumans() }}</div>
                        <div class="panel-body">
                            <p>{{ $post->descricao }}</p>
                            <a href="{{ route('postShow', ['id' => $post->id]) }}" class="btn btn-primary">Leia mais</a>
                        </div>
                    </div>