@extends('adminlte::page')

@section('content')
    <div class="container">
        <h1 class="text-center">Modification de la section team</h1>
        <form action="{{route('team1.update',$team1->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="form-group">
                <label for="section_titre">Titre:</label>
                <input type="text" name="section_titre" id="section_titre" class="form-control mb-2">
            </div>
            <div class="form-group">
                <label for="description">Description de la section:</label>
                <input type="text" name="description" id="description" class="form-control mb-2">
            </div>
            <button type="submit" class="btn btn-primary">Valider</button>
        </form>
    </div>
@endsection