@extends('adminlte::page')

@section('content')
    <div class="container mt-5 pt-5">
        <h1 class="text-center">Modification du portfolio</h1>
        <form action="{{route('portfolio.update',$portfolio->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="form-group">
                <label for="img_titre">Nom du portfolio:</label>
                <input type="text" name="img_titre" id="img_titre" class="form-control mb-2" value="{{$portfolio->img_titre}}">
            </div>
            <div class="form-group">
                <label for="img_description">Description du portfolio:</label>
                <input type="text" name="img_description" id="img_description" class="form-control mb-2" value="{{$portfolio->img_description}}">
            </div>
            <div class="form-group">
                <label for="img_path">Url de l'image du portfolio:</label>
                <input type="file" name="img_path" id="img_path" class="form-control mb-2">
                <img src="{{asset('storage/'.$portfolio->img_path)}}" class="w-25" alt="">
            </div>
            <button type="submit" class="btn btn-primary">Valider</button>
        </form>
    </div>
@endsection