@extends('adminlte::page')

@section('content')
    <div class="container">
        <h1 class="text-center">Section Header</h1>
        @if (count($headers) === 0)
            <a href="{{route('header.create')}}" class="btn btn-primary mb-2">Créer</a>
        @endif

        <div class="row mt-5">
            <div class="col-12">
            <div class="card">
                <div class="card-body table-responsive p-0" style="height: 300px;">
                <table class="table table-head-fixed text-nowrap">
                    <thead>
                    <tr>
                        <th>Image</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($headers as $header)
                            <tr>
                                <td><img src="{{asset('storage/'.$header->img_path)}}" alt="" class="w-75"></td>
                                <td class="d-flex">
                                    <a href="{{route('header.edit',$header->id)}}" class="btn btn-primary">Modifier</a>
                                    <form action="{{route('header.destroy',$header->id)}}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-danger ml-2">Supprimer</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                </div>
            </div>
            </div>
        </div>
    </div>
@endsection