@extends('adminlte::page')

@section('content')
    <div class="container">
        <h1 class="text-center">Modifier</h1>
        <div class="col mt-5">
            <div class="card card-warning">
                <div class="card-body">
                    <form role="form" action="{{route('portfolio.update',$portfolio->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label for="img_titre">Titre</label>
                            <input type="text" name="img_titre" id="img_titre" class="form-control mb-2" value="{{$portfolio->img_titre}}">
                        </div>
                        <div class="form-group">
                            <label for="img_description">Description</label>
                            <input type="text" name="img_description" id="img_description" class="form-control mb-2" value="{{$portfolio->img_description}}">
                        </div>
                        <div class="form-group">
                            <label for="img_path">Image</label>
                            <input type="file" name="img_path" id="img_path" class="form-control mb-2">
                            <img src="{{asset('storage/'.$portfolio->img_path)}}" class="w-25" alt="">
                        </div>
                        <button type="submit" class="btn btn-primary mb-5">Ajouter</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection