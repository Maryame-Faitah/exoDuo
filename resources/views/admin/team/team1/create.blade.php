@extends('adminlte::page')

@section('content')
    <div class="container mt-5 pt-5">
        <h1 class="text-center">Création d'une section team</h1>
        <form action="{{route('team1.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="section_titre">Titre:</label>
                <input type="text" name="section_titre" id="section_titre" class="form-control mb-2">
            </div>
            <div class="form-group">
                <label for="description">Description de la section:</label>
                <input type="text" name="description" id="description" class="form-control mb-2">
            </div>
            <button type="submit" class="btn btn-primary">Ajouter</button>
        </form>
    </div>
@endsection