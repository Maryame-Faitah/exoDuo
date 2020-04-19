@extends('adminlte::page')
@section('content')
<div class="container">
    <h1 class="text-center">Section Subscribe</h1>
    @if(count($subscribes) === 0)
        <a href="{{route('subscribe.create')}}" class="btn btn-primary">Créer</a>
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
                  <th>Url Subscribe</th>
                </tr>
              </thead>
              <tbody>
                  @foreach ($subscribes as $subscribe)
                      <tr>
                        <td>{{$subscribe->id}}</td>
                        <td>{{maxStr($subscribe->url_subscribe, 25)}}</td>
                        <td>
                            <form action="{{route('subscribe.destroy', $subscribe->id)}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('delete')
                                    <a href="{{route('subscribe.edit', $subscribe->id)}}" class="btn btn-primary">Modifier</a>
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