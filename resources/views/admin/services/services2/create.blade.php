@extends('adminlte::page')
@section('content')
    <h1 class="text-center">Créer</h1>
    <div class="container">
      <div class="col mt-5">
        <div class="card card-warning">
          <div class="card-body">
            <form action="{{route('services2.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
  
                  <div class="col-sm-6">
                    <!-- radio -->
                    <div class="form-group">
                      <div class="custom-control custom-radio">
                        <input class="custom-control-input" type="radio" id="customRadio1" name="service_icon" value="fas fa-desktop">
                        <label for="customRadio1" class="custom-control-label"><i class="fas fa-desktop"></i></label>
                      </div>
  
                      <div class="custom-control custom-radio">
                        <input class="custom-control-input" type="radio" id="customRadio2" name="service_icon" value="fas fa-chart-bar">
                        <label for="customRadio2" class="custom-control-label"><i class="fas fa-chart-bar"></i></label>
                      </div>
  
                      <div class="custom-control custom-radio">
                        <input class="custom-control-input" type="radio" id="customRadio3" name="service_icon" value="fas fa-paper-plane">
                        <label for="customRadio3" class="custom-control-label"><i class="fas fa-paper-plane"></i></label>
                      </div>
                      
                      <div class="custom-control custom-radio">
                        <input class="custom-control-input" type="radio" id="customRadio4" name="service_icon" value="fas fa-images">
                        <label for="customRadio4" class="custom-control-label"><i class="fas fa-images"></i></label>
                      </div>
                      
                      <div class="custom-control custom-radio">
                        <input class="custom-control-input" type="radio" id="customRadio5" name="service_icon" value="fas fa-road">
                        <label for="customRadio5" class="custom-control-label"><i class="fas fa-road"></i></label>
                      </div>
                      
                      <div class="custom-control custom-radio">
                        <input class="custom-control-input" type="radio" id="customRadio6" name="service_icon" value="fa fa-shopping-bag">
                        <label for="customRadio6" class="custom-control-label"><i class="fa fa-shopping-bag"></i></label>
                      </div>
                    </div>
                  </div>
  
  
                <div class="form-group">
                    <label for="">Titre du Service</label>
                    <input type="text" name="service_title" id="service_title" class="form-control" placeholder="" aria-describedby="helpId">
                </div>
  
                <div class="form-group">
                    <label for="">Description du Service</label>
                    <input type="text" name="service_description" id="service_description" class="form-control" placeholder="" aria-describedby="helpId">
                </div>
  
                <button type="submit" class="btn btn-primary">Ajouter</button>
              </form>
          </div>
        </div>
      </div>
    </div>
@endsection