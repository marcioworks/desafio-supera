@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Detalhes') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <label>Placa</label>
                    <h2>{{$manutencao[0]->carro['placa']}}</h2>
                    <label>Modelo</label>
                    <h2>{{$manutencao[0]->carro['modelo']->nome}}</h2>
                    <label>Cor</label>
                    <h2>{{$manutencao[0]->carro['cor']}}</h2>
                    <label>Kilometragem</label>
                    <h2>{{$manutencao[0]->carro['km']}}</h2>
                    <label>Manutenção Agendada</label>
                    <h2>{{$manutencao[0]->data_manutencao}}</h2>

                    {{-- <p>Publicado em: {{date('Y-m-d', strtotime($post->criado_em))}}</p>
                    <br>
                    <div>
                        {{$post->texto}}
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
