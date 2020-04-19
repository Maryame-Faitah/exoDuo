@extends('adminlte::page')

@section('content')
    <div class="container">
        <h1 class="text-center">Section About</h1>
        @if (count($abouts) === 0)
            <a href="{{route('about.create')}}" class="btn btn-primary mb-2">Créer</a>
        @endif

        <div class="row mt-5">
            <div class="col-12">
            <div class="card">
                <div class="card-body table-responsive p-0" style="height: 300px;">
                <table class="table table-head-fixed text-nowrap">
                    <thead>
                    <tr>
                        <th>Titre</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Sous-titre</th>
                        <th>Texte</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($abouts as $about)
                            <tr>
                                <td>{{$about->section_titre}}</td>
                                <td>{{$about->description}}</td>
                                <td><img src="{{asset('storage/'.$about->img_path)}}" alt="" class="w-75"></td>
                                <td>{{$about->sous_titre}}</td>
                                <td>{{$about->texte}}</td>
                                <td class="d-flex">
                                    <a href="{{route('about.edit',$about->id)}}" class="btn btn-primary">Modifier</a>
                                    <form action="{{route('about.destroy',$about->id)}}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-danger ml-2">Supprimer</button>
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
    </div>
@endsection