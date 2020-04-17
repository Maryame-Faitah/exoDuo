@extends('adminlte::page')
@section('content')
    <h1 class="text-center">Create</h1>
    <form action="{{route('testimonials2.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="">Image</label>
          <input type="file" name="image" id="image" class="form-control" placeholder="" aria-describedby="helpId">
        </div>

        <div class="form-group">
            <label for="">Name</label>
            <input type="text" name="name" id="name" class="form-control" placeholder="" aria-describedby="helpId">
        </div>

        <div class="form-group">
            <label for="">Job</label>
            <input type="text" name="job" id="job" class="form-control" placeholder="" aria-describedby="helpId">
        </div>

        <div class="form-group">
            <label for="">Description</label>
            <input type="text" name="description" id="description" class="form-control" placeholder="" aria-describedby="helpId">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection