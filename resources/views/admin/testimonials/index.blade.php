@extends('adminlte::page')
@section('content')
<div class="container">
    <h1 class="text-center">Section Testimonials</h1>
    @if(count($testimonials) === 0)
        <a href="{{route('testimonials1.create')}}" class="btn btn-primary">Create</a>
    @endif
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
                  <th>ID</th>
                  <th>Titre de la Section</th>
                  <th>Description de la Section</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($testimonials as $testimonial)
                  <tr>
                      <td>{{$testimonial->id}}</td>
                      <td>{{$testimonial->section_title}}</td>
                      <td>{{$testimonial->section_description}}</td>
                      <td>
                          <form action="{{route('testimonials1.destroy', $testimonial->id)}}" method="POST" enctype="multipart/form-data">
                                  @csrf
                                  @method('delete')
                                  <a href="{{route('testimonials1.edit', $testimonial->id)}}" class="btn btn-primary">Edit</a>
                                  <button type="submit" class="btn btn-danger">Delete</button>
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

        <a href="{{route('testimonials2.create')}}" class="btn btn-primary">Create</a>

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
                  <th>ID</th>
                  <th>Image</th>
                  <th>Nom</th>
                  <th>Job</th>
                  <th>Description</th>
                </tr>
              </thead>
              <tbody>
                  @foreach ($testimonials2 as $testimonial2)
                      <tr>
                        <td>{{$testimonial2->id}}</td>
                        <td class="text-center"><img src="{{asset('storage/'.$testimonial2->img_path)}}" class="w-75" alt=""></td>
                        <td>{{$testimonial2->name}}</td>
                        <td>{{$testimonial2->job}}</td>
                        <td>{{$testimonial2->description}}</td>
                        <td>
                            <form action="{{route('testimonials2.destroy', $testimonial2->id)}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('delete')
                                    <a href="{{route('testimonials2.edit', $testimonial2->id)}}" class="btn btn-primary">Edit</a>
                                    <button type="submit" class="btn btn-danger">Delete</button>
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
</div>
@endsection