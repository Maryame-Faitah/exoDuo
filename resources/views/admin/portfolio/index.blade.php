@extends('adminlte::page')

@section('content')
    <div class="container">
        <h1 class="text-center">Section Portfolio</h1>
        @if (count($portfolios1) === 0)
            <a href="{{route('portfolio1.create')}}" class="btn btn-primary mb-2">Créer</a>
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
                        @foreach ($portfolios1 as $portfolio1)
                            <tr>
                                <td>{{$portfolio1->section_titre}}</td>
                                <td>{{$portfolio1->description}}</td>
                                <td class="d-flex">
                                    <a href="{{route('portfolio1.edit',$portfolio1->id)}}" class="btn btn-success">Modifier</a>
                                    <form action="{{route('portfolio1.destroy',$portfolio1->id)}}" method="POST">
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
        <a href="{{route('portfolio.create')}}" class="btn btn-primary mb-2">Créer</a>
        <div class="row">
            <div class="col-12">
            <div class="card">
                <div class="card-body table-responsive p-0" style="height: 300px;">
                <table class="table table-head-fixed text-nowrap">
                    <thead>
                    <tr>
                        <th>Nom du portfolio</th>
                        <th>Description</th>
                        <th>Portfolio</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($portfolios as $portfolio)
                            <tr>
                                <td>{{$portfolio->img_titre}}</td>
                                <td>{{$portfolio->img_description}}</td>
                                <td><img src="{{asset('storage/'.$portfolio->img_path)}}" class="w-50" alt=""></td>
                                <td class="d-flex">
                                    <a href="{{route('portfolio.edit',$portfolio->id)}}" class="btn btn-success">Modifier</a>
                                    <form action="{{route('portfolio.destroy',$portfolio->id)}}" method="POST">
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