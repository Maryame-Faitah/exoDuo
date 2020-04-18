@extends('adminlte::page')

@section('content')
    <div class="container">
        <h1 class="text-center">Modification de la section Header</h1>
        <form action="{{route('header.update',$header->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="form-group">
                <label for="image">Url de l'image du header:</label>
                <input type="file" name="image" id="image" class="form-control mb-2">
                <img src="{{asset('storage/'.$header->img_path)}}" alt="" class="w-75">
            </div>
            <button type="submit" class="btn btn-primary">Valider</button>
        </form>
    </div>
@endsection