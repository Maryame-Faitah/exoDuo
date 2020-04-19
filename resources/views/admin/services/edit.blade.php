@extends('adminlte::page')
@section('content')
    <h1 class="text-center">Modifier</h1>
    <form action="{{route('services1.update', $service->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="form-group">
          <label for="">Titre de la Section</label>
          <input type="text" name="section_title" value="{{$service->section_title}}" id="section_title" class="form-control" placeholder="" aria-describedby="helpId">
        </div>

        <div class="form-group">
            <label for="">Description de la Section</label>
            <input type="text" name="section_description" value="{{$service->section_description}}" id="section_description" class="form-control" placeholder="" aria-describedby="helpId">
        </div>

        <button type="submit" class="btn btn-primary">Ajouter</button>
    </form>
@endsection