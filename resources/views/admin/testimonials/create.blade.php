@extends('adminlte::page')
@section('content')
    <h1 class="text-center">Créer</h1>
    <div class="container">
      <div class="col mt-5">
          <div class="card card-warning">
  
            <div class="card-body">
              <form action="{{route('testimonials1.store')}}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="form-group">
                  <label for="">Titre</label>
                  <input type="text" name="section_title" id="section_title" class="form-control" placeholder="" aria-describedby="helpId">
                  </div>
  
                  <div class="form-group">
                      <label for="">Description</label>
                      <input type="text" name="section_description" id="section_description" class="form-control" placeholder="" aria-describedby="helpId">
                  </div>
  
                  <button type="submit" class="btn btn-primary">Ajouter</button>
              </form>
            </div>
          </div>
      </div>
    </div>
@endsection