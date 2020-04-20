@extends('adminlte::page')
@section('content')
<div class="container">
    <h1 class="text-center">Section Subscribe</h1>
    @if(count($subscribes) === 0)
        <a href="{{route('subscribe.create')}}" class="btn btn-primary ml-2 mb-2">Créer</a>
    @endif
    <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Subscribe</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body table-responsive p-0" style="{{nbElem($subscribes)}}">
            <table class="table table-hover text-nowrap">
              <thead>
                <tr>
                  <th>Url Subscribe</th>
                </tr>
              </thead>
              <tbody>
                  @foreach ($subscribes as $subscribe)
                      <tr>
                        <td>{{maxStr($subscribe->url_subscribe, 25)}}</td>
                        <td class="text-right">
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