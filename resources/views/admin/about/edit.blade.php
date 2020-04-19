@extends('adminlte::page')

@section('content')
    <div class="container">
        <h1 class="text-center">Modifier</h1>
        <div class="col mt-5">
            <div class="card card-warning">
              <div class="card-body">
                    <form role="form" action="{{route('about.update',$about->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label for="titre">Titre</label>
                            <input type="text" id="titre" name="titre" class="form-control" placeholder="Enter ..."  value="{{$about->section_titre}}">
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <input type="text" id="description" name="description" class="form-control" placeholder="Enter ..."  value="{{$about->description}}">
                        </div>
                        <div class="form-group">
                            <label for="image">Image</label>
                            <input type="file" class="form-control" id="image" name="image">
                            <img src="{{asset('storage/'.$about->img_path)}}" alt="" class="w-50 mt-2">
                        </div>
                        <div class="form-group">
                            <label for="titre2">Sous-titre</label>
                            <input type="text" id="titre2" name="titre2" class="form-control" placeholder="Enter ..."  value="{{$about->sous_titre}}">
                        </div>
                        <div class="form-group">
                            <label for="texte">Texte</label>
                            <textarea id="texte" name="texte" class="form-control" rows="3" placeholder="Enter ...">
                                {{$about->texte}}
                            </textarea>
                        </div>
                        
                        <button type="submit" class="btn btn-primary mb-5">Ajouter</button>
                    </form>
              </div>
            </div>
          </div>

    </div>
@endsection