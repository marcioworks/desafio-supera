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
                    <div class="card-header">{{ __('Agendar Manutenção') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form action="{{ route('marca') }}" method="post">
                            @csrf

                            <div class="form-group">
                                <label for="">Id Usuario</label>
                                <input type="number" name="user_id" value="{{ Auth::user()->id }}" class="form-control"
                                    readonly>
                            </div>

                            <div class="form-group">
                                <label for="cars">Modelo</label>
                                <select  class="custom-select" name="carro_id">
                                    @foreach ($carros as $carro)
                                        <option name="carro_id" value="{{ $carro->id }}" class="form-control">
                                            {{$carro->modelo['nome'].', placa '. $carro->placa }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="">Fazer Manutenção em</label>
                                <input type="date" name="data_manutencao" class="form-control">
                            </div>

                            <button type="submit" class="btn btn-primary">Gravar</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
