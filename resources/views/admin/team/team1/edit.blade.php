@extends('adminlte::page')

@section('content')
    <div class="container">
        <h1 class="text-center">Modifier</h1>
        <div class="col mt-5">
            <div class="card card-warning">
                <div class="card-body">
                    <form role="form" action="{{route('team1.update',$team1->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label for="section_titre">Titre</label>
                            <input type="text" name="section_titre" id="section_titre" class="form-control mb-2" value="{{$team1->section_titre}}">
                        </div>
                        
                        <div class="form-group">
                            <label for="description">Description</label>
                            <input type="text" name="description" id="description" value="{{$team1->description}}" class="form-control mb-2">
                        </div>
                        <button type="submit" class="btn btn-primary mb-5">Ajouter</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection