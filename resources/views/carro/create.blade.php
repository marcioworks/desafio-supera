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
                    <div class="card-header">{{ __('Create Car') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form action="{{ route('carro') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="">Id Usuario</label>
                                <input type="number" name="user_id" value="{{ Auth::user()->id }}" class="form-control"
                                    readonly>
                            </div>
                            <div class="form-group">
                                <label for="cars">Modelo</label>
                                <select  class="custom-select" name="modelo_id">
                                    @foreach ($modelos as $modelo)
                                        <option name="modelo_id" value="{{ $modelo->id }}" class="form-control">
                                            {{ $modelo->nome }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="">Placa</label>
                                <input name="placa" class="form-control" />
                            </div>

                            <div class="form-group">
                                <label for="">Cor</label>
                                <input type="text" name="cor" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="">Km</label>
                                <input type="number" name="km" class="form-control">
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
