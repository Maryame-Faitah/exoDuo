@extends('adminlte::page')
@section('content')
    <h1 class="text-center">Edit</h1>
    <form action="{{route('contactAdmin.update', $contactAdmin->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('put')
        {{-- Icon Adress --}}
          <div class="col-sm-6">
            <!-- radio -->
            <label for="">Icon Address</label>
            <div class="form-group">
              <div class="custom-control custom-radio">

                @if ($contactAdmin->iconAdress === "fas fa-map-marker-alt")
                    <input class="custom-control-input" type="radio" id="address1" name="iconAdress" value="fas fa-map-marker-alt" checked>
                @else
                    <input class="custom-control-input" type="radio" id="address1" name="iconAdress" value="fas fa-map-marker-alt">
                @endif

                <label for="address1" class="custom-control-label"><i class="fas fa-map-marker-alt"></i></label>
              </div>

              <div class="custom-control custom-radio">
                @if ($contactAdmin->iconAdress === "fas fa-map-marker")
                    <input class="custom-control-input" type="radio" id="address2" name="iconAdress" value="fas fa-map-marker" checked>
                @else
                    <input class="custom-control-input" type="radio" id="address2" name="iconAdress" value="fas fa-map-marker">
                @endif

                <label for="address2" class="custom-control-label"><i class="fas fa-map-marker"></i></label>
              </div>

              <div class="custom-control custom-radio">
                @if ($contactAdmin->iconAdress === "fas fa-map-marked-alt")
                    <input class="custom-control-input" type="radio" id="address3" name="iconAdress" value="fas fa-map-marked-alt" checked>
                @else
                    <input class="custom-control-input" type="radio" id="address3" name="iconAdress" value="fas fa-map-marked-alt">
                @endif

                <label for="address3" class="custom-control-label"><i class="fas fa-map-marked-alt"></i></label>
              </div>
              
              <div class="custom-control custom-radio">
                @if ($contactAdmin->iconAdress === "fas fa-map-marked")
                    <input class="custom-control-input" type="radio" id="address5" name="iconAdress" value="fas fa-map-marked" checked>
                @else
                    <input class="custom-control-input" type="radio" id="address5" name="iconAdress" value="fas fa-map-marked">
                @endif

                <label for="address5" class="custom-control-label"><i class="fas fa-map-marked"></i></label>
              </div>
              
          </div>

          {{-- Adress --}}
        <div class="form-group">
            <label for="">Adress de l'Admin</label>
            <input type="text" name="adress" value="{{$contactAdmin->adress}}" id="adress" class="form-control" placeholder="" aria-describedby="helpId">
        </div>

        {{-- Icon Email --}}
        <div class="col-sm-6">
            <label for="">Icon Email</label>
            <!-- radio -->
            <div class="form-group">
              <div class="custom-control custom-radio">
                @if ($contactAdmin->iconEmail === "fas fa-envelope-square")
                    <input class="custom-control-input" type="radio" id="email1adress1" name="iconEmail" value="fas fa-envelope-square" checked>
                @else
                    <input class="custom-control-input" type="radio" id="email1adress1" name="iconEmail" value="fas fa-envelope-square">
                @endif

                <label for="email1adress1" class="custom-control-label"><i class="fas fa-envelope-square"></i></label>
              </div>

              <div class="custom-control custom-radio">
                @if ($contactAdmin->iconEmail === "fas fa-envelope")
                    <input class="custom-control-input" type="radio" id="email2" name="iconEmail" value="fas fa-envelope" checked>
                @else
                    <input class="custom-control-input" type="radio" id="email2" name="iconEmail" value="fas fa-envelope">
                @endif

                <label for="email2" class="custom-control-label"><i class="fas fa-envelope"></i></label>
              </div>

              <div class="custom-control custom-radio">
                @if ($contactAdmin->iconEmail === "far fa-envelope")
                    <input class="custom-control-input" type="radio" id="email3" name="iconEmail" value="far fa-envelope" checked>
                @else
                    <input class="custom-control-input" type="radio" id="email3" name="iconEmail" value="far fa-envelope">
                @endif

                <label for="email3" class="custom-control-label"><i class="far fa-envelope"></i></label>
              </div>
              
              <div class="custom-control custom-radio">
                @if ($contactAdmin->iconEmail === "fas fa-envelope-open")
                    <input class="custom-control-input" type="radio" id="email4" name="iconEmail" value="fas fa-envelope-open" checked>
                @else
                    <input class="custom-control-input" type="radio" id="email4" name="iconEmail" value="fas fa-envelope-open">
                @endif

                <label for="email4" class="custom-control-label"><i class="fas fa-envelope-open"></i></label>
              </div>
              
              <div class="custom-control custom-radio">
                @if ($contactAdmin->iconEmail === "far fa-envelope-open")
                    <input class="custom-control-input" type="radio" id="email5" name="iconEmail" value="far fa-envelope-open" checked>
                @else
                    <input class="custom-control-input" type="radio" id="email5" name="iconEmail" value="far fa-envelope-open">
                @endif

                <label for="email5" class="custom-control-label"><i class="far fa-envelope-open"></i></label>
              </div>
              
            </div>
          </div>

          {{-- Email --}}
        <div class="form-group">
            <label for="">Email de l'Admin</label>
            <input type="email" name="email" value="{{$contactAdmin->email}}" id="email" class="form-control" placeholder="" aria-describedby="helpId">
        </div>

        {{-- Icon Phone --}}
        <div class="col-sm-6">
            <label for="">Icon Phone</label>
            <!-- radio -->
            <input type="radio">
            <div class="form-group">
              <div class="custom-control custom-radio">
                @if ($contactAdmin->iconPhone === "fas fa-phone")
                    <input class="custom-control-input" type="radio" id="phone1" name="iconPhone" value="fas fa-phone" checked>
                @else
                    <input class="custom-control-input" type="radio" id="phone1" name="iconPhone" value="fas fa-phone">
                @endif

                <label for="phone1" class="custom-control-label"><i class="fas fa-phone"></i></label>
              </div>

              <div class="custom-control custom-radio">
                @if ($contactAdmin->iconPhone === "fas fa-phone-volume")
                    <input class="custom-control-input" type="radio" id="phone2" name="iconPhone" value="fas fa-phone-volume" checked>
                @else
                    <input class="custom-control-input" type="radio" id="phone2" name="iconPhone" value="fas fa-phone-volume">
                @endif

                <label for="phone2" class="custom-control-label"><i class="fas fa-phone-volume"></i></label>
              </div>

              <div class="custom-control custom-radio">
                @if ($contactAdmin->iconPhone === "fas fa-phone-square-alt")
                    <input class="custom-control-input" type="radio" id="phone3" name="iconPhone" value="fas fa-phone-square-alt" checked>
                @else
                    <input class="custom-control-input" type="radio" id="phone3" name="iconPhone" value="fas fa-phone-square-alt">
                @endif

                <label for="phone3" class="custom-control-label"><i class="fas fa-phone-square-alt"></i></label>
              </div>
              
              <div class="custom-control custom-radio">
                @if ($contactAdmin->iconPhone === "fas fa-phone-square")
                    <input class="custom-control-input" type="radio" id="phone4" name="iconPhone" value="fas fa-phone-square" checked>
                @else
                    <input class="custom-control-input" type="radio" id="phone4" name="iconPhone" value="fas fa-phone-square">
                @endif

                <label for="phone4" class="custom-control-label"><i class="fas fa-phone-square"></i></label>
              </div>
              
            </div>
          </div>

           {{-- Phone --}}
        <div class="form-group">
            <label for="">Phone</label>
            <input type="tel" name="phone" value="{{$contactAdmin->phone}}" id="phone" class="form-control" placeholder="" aria-describedby="helpId">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection