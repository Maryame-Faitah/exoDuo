@extends('adminlte::page')
@section('content')
<div class="container">
    <h1 class="text-center">Section Services</h1>
    @if(count($services) === 0)
        <a href="{{route('services1.create')}}" class="btn btn-primary ml-2 mb-2">Créer</a>
    @endif
    <div class="col-12 mb-5 pb-5">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Section</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body table-responsive p-0" style="{{nbElem($services)}}">
            <table class="table table-hover text-nowrap">
              <thead>
                <tr>
                  <th>Titre de la Section</th>
                  <th>Description de la Section</th>
                </tr>
              </thead>
              <tbody>
                  @foreach ($services as $service)
                      <tr>
                        <td>{{maxStr($service->section_title, 20)}}</td>
                        <td>{{maxStr($service->section_description, 20)}}
                        </td>
                        <td class="text-right">
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

        <a href="{{route('services2.create')}}" class="btn btn-primary ml-2 mb-2">Créer</a>

    <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Services</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body table-responsive p-0" style="{{nbElem($services2)}}">
            <table class="table table-hover text-nowrap">
              <thead>
                <tr>
                  <th>Icon du Service</th>
                  <th>Titre du Service</th>
                  <th>Description du Service</th>
                </tr>
              </thead>
              <tbody>
                  @foreach ($services2 as $service2)
                  {{-- {{$stringMax = }} --}}
                      <tr>
                        <td class="text-center"><i class="{{$service2->service_icon}}"></i></td>
                        <td>{{maxStr($service2->service_title, 20)}}</td>
                        <td>
                          {{maxStr($service2->service_description, 20)}}
                          </td>
                        <td class="text-right">
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