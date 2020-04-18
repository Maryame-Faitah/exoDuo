@extends('adminlte::page')

@section('content')
    <div class="container mt-5 pt-5">
        <h1 class="text-center">Création d'une section portfolio</h1>
        <form action="{{route('portfolio1.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="section_titre">Titre</label>
                <input type="text" name="section_titre" id="section_titre" class="form-control mb-2">
            </div>
            <div class="form-group">
                <label for="description">Description du portfolio:</label>
                <input type="text" name="description" id="description" class="form-control mb-2">
            </div>
            <button type="submit" class="btn btn-primary">Ajouter</button>
        </form>
    </div>
@endsection