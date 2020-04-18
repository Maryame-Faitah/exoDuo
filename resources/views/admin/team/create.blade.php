@extends('adminlte::page')

@section('content')
    <div class="container mt-5 pt-5">
        <h1 class="text-center">Création d'un nouveau membre:</h1>
        <form action="{{route('team.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="img_titre">Nom du membre:</label>
                <input type="text" name="img_titre" id="img_titre" class="form-control mb-2">
            </div>
            <div class="form-group">
                <label for="img_description">Description de la fonction:</label>
                <input type="text" name="img_description" id="img_description" class="form-control mb-2">
            </div>
            <div class="form-group">
                <label for="img_path">Url de la photo:</label>
                <input type="file" name="img_path" id="img_path" class="form-control mb-2">
            </div>
            <div class="card w-50">
                <div class="card-body p-0">
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th>Icônes</th>
                        <th>Url:</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td><i class="fab fa-twitter"></td>
                        <td><input type="text" name="url1" id="url1" class="form-control mb-2"></td>
                      </tr>
                      <tr>
                        <td><i class="fab fa-facebook-f"></i></td>
                        <td><input type="text" name="url2" id="url2" class="form-control mb-2"></td>
                      </tr>
                      <tr>
                        <td><i class="fab fa-google-plus-g"></i></td>
                        <td><input type="text" name="url3" id="url3" class="form-control mb-2"></td>
                      </tr>
                      <tr>
                        <td><i class="fab fa-linkedin-in"></i></td>
                        <td><input type="text" name="url4" id="url4" class="form-control mb-2"></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Ajouter</button>

        </form>
    </div>
@endsection