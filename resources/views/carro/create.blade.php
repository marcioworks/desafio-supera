@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Create Post') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="/post" method="post" >
                        @csrf
                        <div class="form-group">
                            <label for="">Imagem</label>
                            <input type="file" name="imagem" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Titulo</label>
                            <input type="text" name="titulo" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="">Texto</label>
                            <textarea name="texto" id="" cols="30" rows="10" class="form-control"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="">Publicado em</label>
                            <input type="date" name="criado_em" class="form-control">
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
