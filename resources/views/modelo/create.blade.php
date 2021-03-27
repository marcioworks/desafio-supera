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
                    <div class="card-header">{{ __('Create Modelo') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form action="{{ route('modelo') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="cars">Marca</label>
                                <select class="custom-select" name="marca_id">
                                    @foreach ($marcas as $marca)
                                        <option name="marca_id" value="{{ $marca->id }}" class="form-control">
                                            {{ $marca->nome }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Modelo</label>
                                <input type="text" name="nome" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="cars">Portas</label>
                                <input type="number" name='numero_portas' class="form-control" />
                            </div>

                            <div class="form-group">
                                <label for="">Lugares</label>
                                <input type="number" name="lugares" class="form-control" />
                            </div>

                            <div class="form-group">
                                <label for="cars">Air_Bags</label>
                                <select class="custom-select" name="air_bag">
                                    <option name="air_bag" value="1" class="form-control">
                                        Sim
                                    </option>
                                    <option name="air_bag" value="0" class="form-control">
                                        Não
                                    </option>
                                </select>
                            </div>


                            <div class="form-group">
                                <label for="cars">ABS</label>
                                <select class="custom-select" name="abs">
                                    <option name="abs" value="1" class="form-control">
                                        Sim
                                    </option>
                                    <option name="abs" value="0" class="form-control">
                                        Não
                                    </option>
                                </select>
                            </div>


                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
