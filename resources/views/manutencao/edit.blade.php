@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="card">
                    <div class="card-header">{{ __('Alterar Manutenção') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form action="{{ route('atualizar',['id'=>$manutencao[0]->id]) }}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="">Id Usuario</label>
                                <input type="number" name="user_id" value="{{ Auth::user()->id }}" class="form-control"
                                    readonly>
                            </div>

                            <div class="form-group">

                            <div class="form-group">
                                <label for="">Fazer Manutenção em</label>
                                <input type="date" name="data_manutencao" value="{{ date('Y-m-d', strtotime($manutencao[0]->data_manutencao))}}" class="form-control">
                            </div>

                            <button type="submit" class="btn btn-primary">Gravar</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
