@extends('adminlte::page')
@section('content')
    <h1 class="text-center">Modifier</h1>
    <div class="col mt-5">
      <div class="card card-warning">
        <div class="card-body">
          <form action="{{route('services2.update', $service2->id)}}" method="POST" enctype="multipart/form-data">
              @csrf
              @method('put')

              <div class="col-sm-6">
                <label for="">Icon du Service</label>
                <!-- radio -->
                <div class="form-group">
                  <div class="custom-control custom-radio">
                    @if ($service2->service_icon === "fas fa-desktop")
                      <input class="custom-control-input" type="radio" id="customRadio1" name="service_icon" value="fas fa-desktop" checked>
                    @else
                      <input class="custom-control-input" type="radio" id="customRadio1" name="service_icon" value="fas fa-desktop">
                    @endif
                    <label for="customRadio1" class="custom-control-label"><i class="fas fa-desktop"></i></label>
                  </div>

                  <div class="custom-control custom-radio">
                    @if ($service2->service_icon === "fas fa-chart-bar")
                      <input class="custom-control-input" type="radio" id="customRadio2" name="service_icon" value="fas fa-chart-bar" checked>
                    @else
                      <input class="custom-control-input" type="radio" id="customRadio2" name="service_icon" value="fas fa-chart-bar">
                    @endif
                    <label for="customRadio2" class="custom-control-label"><i class="fas fa-chart-bar"></i></label>
                  </div>

                  <div class="custom-control custom-radio">
                    @if ($service2->service_icon === "fas fa-paper-plane")
                      <input class="custom-control-input" type="radio" id="customRadio3" name="service_icon" value="fas fa-paper-plane" checked>
                    @else
                      <input class="custom-control-input" type="radio" id="customRadio3" name="service_icon" value="fas fa-paper-plane">
                    @endif
                    <label for="customRadio3" class="custom-control-label"><i class="fas fa-paper-plane"></i></label>
                  </div>

                  <div class="custom-control custom-radio">
                    @if ($service2->service_icon === "fas fa-images")
                      <input class="custom-control-input" type="radio" id="customRadio4" name="service_icon" value="fas fa-images" checked>
                    @else
                      <input class="custom-control-input" type="radio" id="customRadio4" name="service_icon" value="fas fa-images">
                    @endif
                    <label for="customRadio4" class="custom-control-label"><i class="fas fa-images"></i></label>
                  </div>

                  <div class="custom-control custom-radio">
                    @if ($service2->service_icon === "fas fa-road")
                      <input class="custom-control-input" type="radio" id="customRadio5" name="service_icon" value="fas fa-road" checked>
                    @else
                      <input class="custom-control-input" type="radio" id="customRadio5" name="service_icon" value="fas fa-road">
                    @endif
                    <label for="customRadio5" class="custom-control-label"><i class="fas fa-road"></i></label>
                  </div>

                  <div class="custom-control custom-radio">
                    @if ($service2->service_icon === "fa fa-shopping-bag")
                      <input class="custom-control-input" type="radio" id="customRadio6" name="service_icon" value="fa fa-shopping-bag" checked>
                    @else
                      <input class="custom-control-input" type="radio" id="customRadio6" name="service_icon" value="fa fa-shopping-bag">
                    @endif
                    <label for="customRadio6" class="custom-control-label"><i class="fa fa-shopping-bag"></i></label>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <label for="">Titre du Service</label>
                <input type="text" name="service_title" value="{{$service2->service_title}}" id="service_title" class="form-control" placeholder="" aria-describedby="helpId">
              </div>

              <div class="form-group">
                  <label for="">Description du Service</label>
                  <input type="text" name="service_description" value="{{$service2->service_description}}" id="service_description" class="form-control" placeholder="" aria-describedby="helpId">
              </div>

              <button type="submit" class="btn btn-primary">Ajouter</button>
          </form>
        </div>
      </div>
    </div>
@endsection