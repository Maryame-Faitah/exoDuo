@extends('adminlte::page')
@section('content')
<div class="container">
    <h1 class="text-center">Section Contact Us</h1>
    @if(count($contactSections) === 0)
        <a href="{{route('contactSection.create')}}" class="btn btn-primary mb-2 ml-2">Créer</a>
    @endif

    <div class="col-12 mb-5 pb-5">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Section</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0" style="{{nbElem($contactSections)}}">
          <table class="table table-hover text-nowrap">
            <thead>
              <tr>
                <th>Titre</th>
                <th>Description</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($contactSections as $contactSection)
                    <tr>
                      <td>{{maxStr($contactSection->title, 15)}}</td>
                      <td>{{maxStr($contactSection->description, 20)}}</td>
                      <td  class="text-right">
                          <form action="{{route('contactSection.destroy', $contactSection->id)}}" method="POST" enctype="multipart/form-data">
                                  @csrf
                                  @method('delete')
                                  <a href="{{route('contactSection.edit', $contactSection->id)}}" class="btn btn-primary">Modifier</a>
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

    @if(count($contactAdmins) === 0)
        <a href="{{route('contactAdmin.create')}}" class="btn btn-primary mb-2 ml-2">Créer</a>
    @endif
    <div class="col-12 mb-5 pb-5">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Address Admin</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body table-responsive p-0" style="{{nbElem($contactAdmins)}}">
            <table class="table table-hover text-nowrap">
              <thead>
                <tr>
                  <th class="text-center">Icon/Address</th>
                  <th class="text-center">Icon/Email</th>
                  <th class="text-center">Icon/Phone</th>
                </tr>
              </thead>
              <tbody>
                  @foreach ($contactAdmins as $contactAdmin)
                      <tr>
                        <td>
                          <div class="d-flex flex-column align-items-center">
                            <i class="{{$contactAdmin->iconAdress}} mb-1"></i>
                            {{maxStr($contactAdmin->adress, 20)}}
                          </div>
                        </td>
                        <td>
                          <div class="d-flex flex-column align-items-center">
                            <i class="{{$contactAdmin->iconEmail}} mb-1"></i>
                            {{maxStr($contactAdmin->email, 20)}}
                          </div>
                        </td>
                        <td>
                          <div class="d-flex flex-column align-items-center">
                            <i class="{{$contactAdmin->iconPhone}} mb-1"></i>
                            {{maxStr($contactAdmin->phone, 10)}}
                        </td>
                        <td class="text-right">
                            <form action="{{route('contactAdmin.destroy', $contactAdmin->id)}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('delete')
                                    <a href="{{route('contactAdmin.edit', $contactAdmin->id)}}" class="btn btn-primary">Modifier</a>
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


      <div class="col-md-12 mb-5">
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
              <a href="{{route('contactAdmin.index')}}" class="btn btn-default btn-sm"><i class="fas fa-sync-alt"></i></a>
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
                  @if (count($contactUsers) !== 0)
                    @foreach ($contactUsers as $index => $contactUser)
                      <tr>
                        <td>
                          <div class="icheck-primary">
                            <input type="checkbox" value="" id="check1">
                            <label for="check1"></label>
                          </div>
                        </td>
                        <td class="mailbox-star"><a href="#"><i class="fas fa-star text-warning"></i></a></td>
                        <td class="mailbox-name"><a href="{{route('contactUser.show', $contactUser->id)}}">{{maxStr($contactUser->name, 10)}}</a></td>
                        <td class="mailbox-subject"><b>{{$contactUser->subject}}</b> - {{maxStr($contactUser->message, 25)}}
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
                  @else
                    <tr>
                      <td class="mailbox-name"> Vous n'avez pas de messages</td>
                    </tr>
                  @endif
              
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
              <a href="{{route('contactAdmin.index')}}" class="btn btn-default btn-sm"><i class="fas fa-sync-alt"></i></a>
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