@extends('adminlte::page')
@section('content')
    <h1 class="text-center">Edit</h1>
    <form action="{{route('contactSection.update', $contactSection->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="form-group">
          <label for="">Url du button Submite</label>
          <input type="text" name="title" value="{{$contactSection->title}}" id="title" class="form-control" placeholder="" aria-describedby="helpId">
        </div>

        <div class="form-group">
            <label for="">Url du button Submite</label>
            <input type="text" name="description" value="{{$contactSection->description}}" id="description" class="form-control" placeholder="" aria-describedby="helpId">
          </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection