@extends('adminlte::page')
@section('content')
    <h1 class="text-center">Creer l'url du button Subscribe</h1>
    <form action="{{route('subscribe.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="">Url du button Subscribe</label>
          <input type="text" name="url_subscribe" id="url_subscribe" class="form-control" placeholder="" aria-describedby="helpId">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection