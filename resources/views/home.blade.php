@extends('layout.site')

@section('titulo', 'Marca aí')

@section('conteudo')
    
    <div class="container">
        <h3 class="center">Eventos Disponíveis</h3>
        <div class="row">
            @foreach($eventos as $evento)
            <div class="col s12 m4">
                <div class="card">
                    <div class="card-image">
                        <img src="{{asset($evento->imagem)}}">
                    </div>
                    <div class="card-content">
                        <h4>{{$evento->titulo}}</h4>
                        <p>{{$evento->descricao}}</p>
                    </div>
                    @if(Auth::guest())
                    @else
                    <div class="card-action">
                        <a href="{{route('admin.interesse.salvar',$evento->id)}}">Add a lista de Interesse</a>
                    </div>
                    @endif
                    <div class="card-action">
                        <a href="{{route('site.interesse.interessados',$evento->id)}}">Ver Interessados</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        
        <div class="row" align="center">
            {{$eventos->links()}}
        </div>
    </div>

@endsection

