@extends('adminlte::page')
@section('content')
    <h1 class="text-center">Modifier</h1>
    <div class="col mt-5">
        <div class="card card-warning">
<<<<<<< HEAD
          <div class="card-body">
            <form action="{{route('testimonials1.update', $testimonial->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="form-group">
                <label for="">Titre de la Section</label>
                <input type="text" name="section_title" value="{{$testimonial->section_title}}" id="section_title" class="form-control" placeholder="" aria-describedby="helpId">
                </div>

                <div class="form-group">
                    <label for="">Description de la Section</label>
                    <input type="text" name="section_description" value="{{$testimonial->section_description}}" id="section_description" class="form-control" placeholder="" aria-describedby="helpId">
                </div>

                <button type="submit" class="btn btn-primary">Ajouter</button>
            </form>
          </div>
=======
            <div class="card-body">
                <form action="{{route('testimonials1.update', $testimonial->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="form-group">
                      <label for="">Titre de la Section</label>
                      <input type="text" name="section_title" value="{{$testimonial->section_title}}" id="section_title" class="form-control" placeholder="" aria-describedby="helpId">
                    </div>
            
                    <div class="form-group">
                        <label for="">Description de la Section</label>
                        <input type="text" name="section_description" value="{{$testimonial->section_description}}" id="section_description" class="form-control" placeholder="" aria-describedby="helpId">
                    </div>
            
                    <button type="submit" class="btn btn-primary">Ajouter</button>
                </form>
            </div>
>>>>>>> c5fecfb0dcc7db24dc448405467f8b863354f006
        </div>
    </div>
@endsection