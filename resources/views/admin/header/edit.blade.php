@extends('adminlte::page')

@section('content')
    <div class="container mt-5 pt-5">
        <h1 class="text-center mt-5 pt-5">Modification de la section Header</h1>
        <form action="{{route('header.update',$header->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="form-group">
                <label for="image">Url de l'image du header:</label>
                <input type="file" name="image" id="image" class="form-control mb-2">
            </div>
            <button type="submit" class="btn btn-primary">Valider</button>
        </form>
    </div>
@endsection