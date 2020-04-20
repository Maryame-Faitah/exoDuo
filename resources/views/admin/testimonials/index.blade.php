@extends('adminlte::page')
@section('content')
<div class="container">
    <h1 class="text-center">Section Testimonials</h1>
    @if(count($testimonials) === 0)
        <a href="{{route('testimonials1.create')}}" class="btn btn-primary ml-2 mb-2">Créer</a>
    @endif
    <div class="col-12 mb-5 pb-5">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Responsive Hover Table</h3>
    
            <div class="card-tools">
              <div class="input-group input-group-sm" style="width: 150px;">
                <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
    
                <div class="input-group-append">
                  <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                </div>
              </div>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body table-responsive p-0">
            <table class="table table-hover text-nowrap">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Titre</th>
                  <th>Description</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($testimonials as $testimonial)
                  <tr>
                      <td>{{$testimonial->id}}</td>
                      <td>{{maxStr($testimonial->section_title, 20)}}</td>
                      <td>{{maxStr($testimonial->section_description, 20)}}
                      </td>
                      <td>
                          <form action="{{route('testimonials1.destroy', $testimonial->id)}}" method="POST" enctype="multipart/form-data">
                                  @csrf
                                  @method('delete')
                                  <a href="{{route('testimonials1.edit', $testimonial->id)}}" class="btn btn-primary">Modifier</a>
                                  <button type="submit" class="btn btn-danger">Supprimer</button>
                          </form>
                      </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>

        <a href="{{route('testimonials2.create')}}" class="btn btn-primary ml-2 mb-2">Créer</a>

    <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Responsive Hover Table</h3>
            <div class="card-tools">
              <div class="input-group input-group-sm" style="width: 150px;">
                <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
    
                <div class="input-group-append">
                  <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                </div>
              </div>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body table-responsive p-0">
            <table class="table table-hover text-nowrap">
              <thead>
                <tr>
                  <th>Image</th>
                  <th>Nom</th>
                  <th>Fonction</th>
                  <th>Description</th>
                </tr>
              </thead>
              <tbody>
                  @foreach ($testimonials2 as $testimonial2)
                      <tr>
                        <td class="text-center"><img src="{{asset('storage/'.$testimonial2->img_path)}}" class="w-50 rounded-circle" alt=""></td>
                        <td>{{maxStr($testimonial2->name, 15)}}</td>
                        <td>{{maxStr($testimonial2->job, 20)}}</td>
                        <td>
                          {{maxStr($testimonial2->description, 20)}}
                        </td>
                        <td>
                            <form action="{{route('testimonials2.destroy', $testimonial2->id)}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('delete')
                                    <a href="{{route('testimonials2.edit', $testimonial2->id)}}" class="btn btn-primary">Modifier</a>
                                    <button type="submit" class="btn btn-danger">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                  @endforeach
                
              </tbody>
            </table>
          </div>
        </div>
      </div>
</div>
@endsection