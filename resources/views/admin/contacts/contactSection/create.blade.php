@extends('adminlte::page')
@section('content')
    <h1 class="text-center">Créer</h1>
    <div class="col mt-5">
      <div class="card card-warning">
        <div class="card-body">
          <form action="{{route('contactSection.store')}}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="form-group">
                <label for="">Titre de la Section</label>
                <input type="text" name="title" id="title" class="form-control" placeholder="" aria-describedby="helpId">
              </div>

              <div class="form-group">
                  <label for="">Description de la Section</label>
                  <input type="text" name="description" id="description" class="form-control" placeholder="" aria-describedby="helpId">
                </div>
              <button type="submit" class="btn btn-primary">Ajouter</button>
          </form>
        </div>
      </div>
    </div>
@endsection