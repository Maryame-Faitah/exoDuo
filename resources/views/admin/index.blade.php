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
                  <span class="badge bg-primary float-right">{{count($contactUsers)}}</span>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('testimonials2.index')}}" class="nav-link">
                  <i class="far fa-comments"></i> Testimonials <span class="badge bg-info float-right">{{count($testimonials2)}}</span>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('services2.index')}}" class="nav-link">
                  <i class="fas fa-hands-helping"></i> Services <span class="badge bg-success float-right">{{count($services2)}}</span>
                </a>
              </li>
            </ul>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
@endsection

