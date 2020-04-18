@extends('adminlte::page')
@section('content')
<div class="container">
    <h1 class="text-center">Section Contact Us</h1>
    @if(count($contactSections) === 0)
        <a href="{{route('contactSection.create')}}" class="btn btn-primary my-3 ml-2">Create</a>
    @endif

    <div class="col-12 mb-5 pb-5">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Section</h3>
  
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
                <th>Titre de la Section</th>
                <th>Description de la Section</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($contactSections as $contactSection)
                    <tr>
                      <td>{{$contactSection->id}}</td>
                      <td>{{$contactSection->title}}</td>
                      <td>{{$contactSection->description}}</td>
                      <td>
                          <form action="{{route('contactSection.destroy', $contactSection->id)}}" method="POST" enctype="multipart/form-data">
                                  @csrf
                                  @method('delete')
                                  <a href="{{route('contactSection.edit', $contactSection->id)}}" class="btn btn-primary">Edit</a>
                                  <button type="submit" class="btn btn-danger">Delete</button>
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

    @if(count($contactAdmins) === 0)
        <a href="{{route('contactSection.create')}}" class="btn btn-primary my-3 ml-2">Create</a>
    @endif
    <div class="col-12 mb-5 pb-5">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Address Admin</h3>
    
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
                  <th>Icon Adress</th>
                  <th>Adress</th>
                  <th>Icon Email</th>
                  <th>Email</th>
                  <th>Icon Phone</th>
                  <th>Phone</th>
                </tr>
              </thead>
              <tbody>
                  @foreach ($contactAdmins as $contactAdmin)
                      <tr>
                        <td>{{$contactAdmin->id}}</td>
                        <td class="text-center"><i class="{{$contactAdmin->iconAdress}}"></i></td>
                        <td>{{$contactAdmin->adress}}</td>
                        <td class="text-center"><i class="{{$contactAdmin->iconEmail}}"></i></td>
                        <td>{{$contactAdmin->email}}</td>
                        <td class="text-center"><i class="{{$contactAdmin->iconPhone}}"></i></td>
                        <td>{{$contactAdmin->phone}}</td>
                        <td>
                            <form action="{{route('contactAdmin.destroy', $contactAdmin->id)}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('delete')
                                    <a href="{{route('contactAdmin.edit', $contactAdmin->id)}}" class="btn btn-primary">Edit</a>
                                    <button type="submit" class="btn btn-danger">Delete</button>
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


      <div class="col-md-12">
        <h1>Emails</h1>
        <div class="card card-primary card-outline">
          <div class="card-header">
            <h3 class="card-title">Inbox</h3>

            <div class="card-tools">
              <div class="input-group input-group-sm">
                <input type="text" class="form-control" placeholder="Search Mail">
                <div class="input-group-append">
                  <div class="btn btn-primary">
                    <i class="fas fa-search"></i>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.card-tools -->
          </div>
          <!-- /.card-header -->
          <div class="card-body p-0">
            <div class="mailbox-controls">
              <!-- Check all button -->
              <button type="button" class="btn btn-default btn-sm checkbox-toggle"><i class="far fa-square"></i>
              </button>
              <div class="btn-group">
                <button type="button" class="btn btn-default btn-sm"><i class="far fa-trash-alt"></i></button>
                <button type="button" class="btn btn-default btn-sm"><i class="fas fa-reply"></i></button>
                <button type="button" class="btn btn-default btn-sm"><i class="fas fa-share"></i></button>
              </div>
              <!-- /.btn-group -->
              <button type="button" class="btn btn-default btn-sm"><i class="fas fa-sync-alt"></i></button>
              <div class="float-right">
                @if (count($contactUsers) === 0)
                  0-{{count($contactUsers)}}/{{count($contactUsers)}}
                @else
                    1-{{count($contactUsers)}}/{{count($contactUsers)}}
                @endif
                <div class="btn-group">
                  <button type="button" class="btn btn-default btn-sm"><i class="fas fa-chevron-left"></i></button>
                  <button type="button" class="btn btn-default btn-sm"><i class="fas fa-chevron-right"></i></button>
                </div>
                <!-- /.btn-group -->
              </div>
              <!-- /.float-right -->
            </div>
            <div class="table-responsive mailbox-messages">
              <table class="table table-hover table-striped">
                <tbody>
                  @foreach ($contactUsers as $index => $contactUser)
                    <tr>
                      <td>
                        <div class="icheck-primary">
                          <input type="checkbox" value="" id="check1">
                          <label for="check1"></label>
                        </div>
                      </td>
                      <td class="mailbox-star"><a href="#"><i class="fas fa-star text-warning"></i></a></td>
                      <td class="mailbox-name"><a href="{{route('contactUser.show', $contactUser->id)}}">{{$contactUser->name}}</a></td>
                      <td class="mailbox-subject"><b>{{$contactUser->subject}}</b> - {{$contactUser->message}}
                      </td>
                      <td class="mailbox-attachment"></td>
                      <td class="mailbox-date">5 mins ago</td>
                      <td >
                        <form action="{{route('contactUser.destroy', $contactUser->id)}}" method="POST" enctype="multipart/form-data">
                          @csrf
                          @method('delete')
                          <button type="submit" class="btn btn-default btn-sm"><i class="far fa-trash-alt"></i></button>
                        </form>
                      </td>
                    </tr>
                  @endforeach
               
                </tbody>
              </table>
              <!-- /.table -->
            </div>
            <!-- /.mail-box-messages -->
          </div>
          <!-- /.card-body -->
          <div class="card-footer p-0">
            <div class="mailbox-controls">
              <!-- Check all button -->
              <button type="button" class="btn btn-default btn-sm checkbox-toggle"><i class="far fa-square"></i>
              </button>
              <div class="btn-group">
                <button type="button" class="btn btn-default btn-sm"><i class="far fa-trash-alt"></i></button>
                <button type="button" class="btn btn-default btn-sm"><i class="fas fa-reply"></i></button>
                <button type="button" class="btn btn-default btn-sm"><i class="fas fa-share"></i></button>
              </div>
              <!-- /.btn-group -->
              <button type="button" class="btn btn-default btn-sm"><i class="fas fa-sync-alt"></i></button>
              <div class="float-right">
                @if (count($contactUsers) === 0)
                  0-{{count($contactUsers)}}/{{count($contactUsers)}}
                @else
                    1-{{count($contactUsers)}}/{{count($contactUsers)}}
                @endif

                {{-- {{++$index}}-{{count($contactUsers)}}/{{count($contactUsers)}} --}}
                <div class="btn-group">
                  <button type="button" class="btn btn-default btn-sm"><i class="fas fa-chevron-left"></i></button>
                  <button type="button" class="btn btn-default btn-sm"><i class="fas fa-chevron-right"></i></button>
                </div>
                <!-- /.btn-group -->
              </div>
              <!-- /.float-right -->
            </div>
          </div>
        </div>
        <!-- /.card -->
      </div>
</div>
@endsection