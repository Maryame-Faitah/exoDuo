@extends('adminlte::page')

@section('content')
    <div class="container">
        <h1 class="text-center">Modifier</h1>
        <div class="col mt-5">
          <div class="card card-warning">
            <div class="card-body">
              <form role="form" action="{{route('team.update',$team->id)}}" method="POST" enctype="multipart/form-data">
                  @csrf
                  @method('put')
                  <div class="form-group">
                      <label for="img_titre">Nom</label>
                      <input type="text" name="img_titre" id="img_titre" class="form-control mb-2" value="{{$team->img_titre}}">
                  </div>
                  <div class="form-group">
                      <label for="img_description">Fonction</label>
                      <input type="text" name="img_description" id="img_description" class="form-control mb-2" value="{{$team->img_description}}">
                  </div>
                  <div class="form-group">
                      <label for="img_path">Photo</label>
                      <input type="file" name="img_path" id="img_path" class="form-control mb-2">
                      <img src="{{asset('storage/'.$team->img_path)}}" alt="">
                  </div>
                  <div class="card w-50">
                      <div class="card-body p-0">
                        <table class="table table-bordered">
                          {{-- @if ()
                              
                          @endif --}}
                          <thead>
                            <tr>
                              <th>Icônes</th>
                              <th>Url:</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td><i class="fab fa-twitter"></td>
                              <td><input type="text" name="url1" id="url1" class="form-control mb-2" value="{{$team->url1}}"></td>
                            </tr>
                            <tr>
                              <td><i class="fab fa-facebook-f"></i></td>
                              <td><input type="text" name="url2" id="url2" class="form-control mb-2" value="{{$team->url2}}"></td>
                            </tr>
                            <tr>
                              <td><i class="fab fa-google-plus-g"></i></td>
                              <td><input type="text" name="url3" id="url3" class="form-control mb-2" value="{{$team->url3}}"></td>
                            </tr>
                            <tr>
                              <td><i class="fab fa-linkedin-in"></i></td>
                              <td><input type="text" name="url4" id="url4" class="form-control mb-2" value="{{$team->url4}}"></td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                  </div>
      
                  <button type="submit" class="btn btn-primary mb-5">Ajouter</button>
      
              </form>
            </div>
          </div>
        </div>
    </div>
@endsection