@extends('adminlte::page')

@section('content')
    <div class="container">
        <h1 class="text-center">Section Team</h1>
        @if (count($teams1) === 0)
            <a href="{{route('team1.create')}}" class="btn btn-primary mb-2">Créer</a>
        @endif
        <div class="row my-5 pb-5">
            <div class="col-12">
            <div class="card">
                <div class="card-body table-responsive p-0" style="{{nbElem($teams1)}}">
                <table class="table table-head-fixed text-nowrap">
                    <thead>
                    <tr>
                        <th>Titre</th>
                        <th>Description</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($teams1 as $team1)
                            <tr>
                                <td>{{maxStr($team1->section_titre, 20)}}</td>
                                <td>{{maxStr($team1->description, 20)}}</td>
                                <td class="d-flex">
                                    <form action="{{route('team1.destroy',$team1->id)}}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <a href="{{route('team1.edit',$team1->id)}}" class="btn btn-primary">Modifier</a>
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
                <div class="card-body table-responsive p-0" style="{{nbElem($teams)}}">
                <table class="table table-head-fixed text-nowrap">
                    <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Fonction</th>
                        <th>Photo</th>
                        <th>Url</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($teams as $team)
                            <tr>
                                <td>{{maxStr($team->img_titre, 15)}}</td>
                                <td>{{maxStr($team->img_description, 20)}}</td>
                                <td><img src="{{asset('storage/'.$team->img_path)}}" class="w-50" alt=""></td>
                                <td>{{maxStr($team->url1, 15)}} <br>
                                    {{maxStr($team->url2, 15)}} <br>
                                    {{maxStr($team->url3, 15)}} <br>
                                    {{maxStr($team->url4, 15)}}
                                </td>
                                
                                <td class="d-flex">
                                    <a href="{{route('team.edit',$team->id)}}" class="btn btn-primary">Modifier</a>
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