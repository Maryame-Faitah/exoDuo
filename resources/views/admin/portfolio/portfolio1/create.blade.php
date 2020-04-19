@extends('adminlte::page')

@section('content')
    <div class="container">
        <h1 class="text-center">Créer</h1>
        <div class="col mt-5">
            <div class="card card-warning">
                <div class="card-body">
                    <form action="{{route('portfolio1.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="section_titre">Titre</label>
                            <input type="text" name="section_titre" id="section_titre" class="form-control mb-2">
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <input type="text" name="description" id="description" class="form-control mb-2">
                        </div>
                        <button type="submit" class="btn btn-primary">Ajouter</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection