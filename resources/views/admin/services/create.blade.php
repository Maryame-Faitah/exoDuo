@extends('adminlte::page')
@section('content')
    <h1 class="text-center">Créer</h1>
    <form action="{{route('services1.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="">Titre de la Section</label>
          <input type="text" name="section_title" id="section_title" class="form-control" placeholder="" aria-describedby="helpId">
        </div>

        <div class="form-group">
            <label for="">Description de la Section</label>
            <input type="text" name="section_description" id="section_description" class="form-control" placeholder="" aria-describedby="helpId">
        </div>

        <button type="submit" class="btn btn-primary">Ajouter</button>
    </form>
@endsection