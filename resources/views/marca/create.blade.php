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
                    <div class="card-header">{{ __('Create Marca') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form action="{{ route('marca') }}" method="post">
                            @csrf

                            <div class="form-group">
                                <label for="">Nome da Marca</label>
                                <input type="text" name="nome" class="form-control">
                            </div>

                            <button type="submit" class="btn btn-primary">Gravar</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
