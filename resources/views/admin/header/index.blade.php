@extends('adminlte::page')

@section('content')
<div class="container">
    <h1 class="text-center">Section Header</h1>
    {{-- Conditions pour mettre 1 header max et pas afficher le btn si en existe deja un --}}
    @if (count($headers) === 0)
        <a href="{{route('header.create')}}" class="btn btn-primary mb-2">Créer</a>
    @endif
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Image</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($headers as $header)
                <tr>
                    <th scope="row">1</th>
                    <td><img src="{{asset('storage/'.$header->img_path)}}" alt="" class="w-75"></td>
                    <td class="d-flex">
                        <a href="{{route('header.edit',$header->id)}}" class="btn btn-success">Modifier</a>
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
@endsection