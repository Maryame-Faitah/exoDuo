@extends('adminlte::page')

@section('content')
    <div class="container">
        <h1 class="text-center">Section Team</h1>
        @if (count($teams1) === 0)
            <a href="{{route('team1.create')}}" class="btn btn-primary mb-2">Créer</a>
        @endif
        <div class="row">
            <div class="col-12">
            <div class="card">
                <div class="card-body table-responsive p-0" style="height: 300px;">
                <table class="table table-head-fixed text-nowrap">
                    <thead>
                    <tr>
                        <th>Titre de la section</th>
                        <th>Description de la section</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($teams1 as $team1)
                            <tr>
                                <td>{{$team1->section_titre}}</td>
                                <td>{{$team1->description}}</td>
                                <td class="d-flex">
                                    <a href="{{route('team1.edit',$team1->id)}}" class="btn btn-success">Modifier</a>
                                    <form action="{{route('team1.destroy',$team1->id)}}" method="POST">
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
            </div>
            </div>
        </div>
        @if (count($teams) < 4)
            <a href="{{route('team.create')}}" class="btn btn-primary mb-2">Créer</a>
        @endif
        <div class="row">
            <div class="col-12">
            <div class="card">
                <div class="card-body table-responsive p-0" style="height: 300px;">
                <table class="table table-head-fixed text-nowrap">
                    <thead>
                    <tr>
                        <th>Nom du membre</th>
                        <th>Description</th>
                        <th>Photo</th>
                        <th>Url</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($teams as $team)
                            <tr>
                                <td>{{$team->img_titre}}</td>
                                <td>{{$team->img_description}}</td>
                                <td><img src="{{asset('storage/'.$team->img_path)}}" class="w-50" alt=""></td>
                                <td>{{$team->url1}} <br>
                                    {{$team->url2}} <br>
                                    {{$team->url3}} <br>
                                    {{$team->url4}}
                                </td>
                                
                                <td class="d-flex">
                                    <a href="{{route('team.edit',$team->id)}}" class="btn btn-success">Modifier</a>
                                    <form action="{{route('team.destroy',$team->id)}}" method="POST">
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
            </div>
            </div>
        </div>
    </div>
@endsection