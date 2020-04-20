@extends('adminlte::page')
@section('content')
<div class="container">
    <h1 class="text-center">Section Services</h1>
    @if(count($services) === 0)
        <a href="{{route('services1.create')}}" class="btn btn-primary ml-2 pb-2 mb-2">Créer</a>
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
                  @foreach ($services as $service)
                      <tr>
                        <td>{{$service->id}}</td>
                        <td>{{maxStr($service->section_title, 20)}}</td>
                        <td>{{maxStr($service->section_description, 20)}}
                        </td>
                        <td>
                            <form action="{{route('services1.destroy', $service->id)}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('delete')
                                    <a href="{{route('services1.edit', $service->id)}}" class="btn btn-primary">Modifier</a>
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

        <a href="{{route('services2.create')}}" class="btn btn-primary ml-2 pb-2 mb-2">Créer</a>

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
                  <th>Icon</th>
                  <th>Titre</th>
                  <th>Description</th>
                </tr>
              </thead>
              <tbody>
                  @foreach ($services2 as $service2)
                  {{-- {{$stringMax = }} --}}
                      <tr>
                        <td>{{$service2->id}}</td>
                        <td class="text-center"><i class="{{$service2->service_icon}}"></i></td>
                        <td>{{maxStr($service2->service_title, 20)}}</td>
                        <td>
                          {{maxStr($service2->service_description, 20)}}
                          </td>
                        <td>
                            <form action="{{route('services2.destroy', $service2->id)}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('delete')
                                    <a href="{{route('services2.edit', $service2->id)}}" class="btn btn-primary">Modifier</a>
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
</div>
@endsection