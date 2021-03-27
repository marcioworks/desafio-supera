@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    <div class="col-12">
                {{-- <a href="posts/create" class="btn btn-primary mb-2">Create Post</a> --}}
                <br>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Usuario</th>
                            <th>data</th>
                            <th colspan="2">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($manutencoes as $manutencao)
                        <tr>
                            <td>{{ $manutencao->id }}</td>
                            <td>{{ $manutencao->user_id }}</td>
                            <td>{{ date('Y-m-d', strtotime($manutencao->data_manutencao)) }}</td>
                            <td>
                            <a href="posts/{{$manutencao->id}}" class="btn btn-primary">Show</a>
                            <a href="posts/{{$manutencao->id}}/edit" class="btn btn-primary">Edit</a>
                            <form action="posts/{{$manutencao->id}}" method="post" class="d-inline">
                                {{ csrf_field() }}
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit">Delete</button>
                            </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
    </div>
</div>
@endsection
