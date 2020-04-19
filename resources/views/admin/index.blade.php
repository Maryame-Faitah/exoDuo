@extends('adminlte::page')

@section('content')
    <h1 class="text-center">Dashboard Admin</h1>

    <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Folders</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
              </button>
            </div>
          </div>
          <div class="card-body p-0">
            <ul class="nav nav-pills flex-column">
              <li class="nav-item active">
                <a href="{{route('contactAdmin.index')}}" class="nav-link">
                  <i class="fas fa-inbox"></i> Inbox
                  @if (count($contactUsers) !== 0)
                    <span class="badge bg-primary float-right">{{nbPosts($contactUsers)}}</span>
                  @endif
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('testimonials2.index')}}" class="nav-link">
                  <i class="far fa-comments"></i> Testimonials
                  @if (count($testimonials2) !== 0)
                    <span class="badge bg-info float-right">{{nbPosts($testimonials2)}}</span>
                  @endif
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('services2.index')}}" class="nav-link">
                  <i class="fas fa-hands-helping"></i> Services
                  @if (count($services2) !== 0)
                    <span class="badge bg-success float-right">{{nbPosts($services2)}}</span>
                  @endif
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('portfolio1.index')}}" class="nav-link">
                  <i class="fas fa-hands-helping"></i> Portfolios
                  @if (count($portfolios) !== 0)
                    <span class="badge bg-success float-right">{{nbPosts($portfolios)}}</span>
                  @endif
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('team1.index')}}" class="nav-link">
                  <i class="fas fa-hands-helping"></i> Team
                  @if (count($teams) !== 0)
                    <span class="badge bg-success float-right">{{nbPosts($teams)}}</span>
                  @endif
                </a>
              </li>
            </ul>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
@endsection

