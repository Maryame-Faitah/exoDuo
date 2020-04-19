@extends('adminlte::page')

@section('content')
    <div class="container">
        <h1 class="text-center mb-5">Créer</h1>
        <div class="col mt-5">
            <div class="card card-warning">
                <div class="card-body">
                    <form role="form" action="{{route('header.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="image">Image</label>
                            <input type="file" name="image" id="image" class="form-control mb-2">
                        </div>
                        <button type="submit" class="btn btn-primary mb-5">Ajouter</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection