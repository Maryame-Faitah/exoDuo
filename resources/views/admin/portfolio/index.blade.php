@extends('adminlte::page')

@section('content')
    <div class="container">
        <h1 class="text-center">Section Portfolio</h1>
        @if (count($portfolios1) === 0)
            <a href="{{route('portfolio1.create')}}" class="btn btn-primary mb-2">Créer</a>
        @endif
        <div class="row my-5 pb-5">
            <div class="col-12">
            <div class="card">
                <div class="card-body table-responsive p-0" style="height: 300px;">
                <table class="table table-head-fixed text-nowrap">
                    <thead>
                    <tr>
                        <th>Titre</th>
                        <th>Description</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($portfolios1 as $portfolio1)
                            <tr>
                                <td>{{maxStr($portfolio1->section_titre, 20)}}</td>
                                <td>{{maxStr($portfolio1->description, 20)}}</td>
                                <td class="d-flex">
                                    <a href="{{route('portfolio1.edit',$portfolio1->id)}}" class="btn btn-primary">Modifier</a>
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
                        <th>Titre</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($portfolios as $portfolio)
                            <tr>
                                <td>{{maxStr($portfolio->img_titre, 15)}}</td>
                                <td>{{maxStr($portfolio->img_description, 20)}}</td>
                                <td><img src="{{asset('storage/'.$portfolio->img_path)}}" class="w-50" alt=""></td>
                                <td class="d-flex">
                                    <a href="{{route('portfolio.edit',$portfolio->id)}}" class="btn btn-primary">Modifier</a>
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