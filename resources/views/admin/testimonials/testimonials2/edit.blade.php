@extends('adminlte::page')
@section('content')
    <h1 class="text-center">Edit</h1>
    <form action="{{route('testimonials2.update', $testimonial2->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="form-group d-flex flex-column">
          <label for="">Image</label>
          <img src="{{asset('storage/'.$testimonial2->img_path)}}" class="w-25 my-2" alt="">
          <input type="file" name="image" value="{{$testimonial2->img_path}}" id="image" class="form-control" placeholder="" aria-describedby="helpId">
        </div>

        <div class="form-group">
            <label for="">Description de la Section</label>
            <input type="text" name="name" value="{{$testimonial2->name}}" id="name" class="form-control" placeholder="" aria-describedby="helpId">
        </div>

        <div class="form-group">
            <label for="">Description de la Section</label>
            <input type="text" name="job" value="{{$testimonial2->job}}" id="job" class="form-control" placeholder="" aria-describedby="helpId">
        </div>

        <div class="form-group">
            <label for="">Description de la Section</label>
            <input type="text" name="description" value="{{$testimonial2->description}}" id="description" class="form-control" placeholder="" aria-describedby="helpId">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection