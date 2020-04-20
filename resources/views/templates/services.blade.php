<section id="services">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          @if (count($services) !== 0)
            <h3 class="section-title">{{$services[0]->section_title}}</h3>
          @else
            <h3 class="section-title">Our Services</h3>
          @endif
          <div class="section-title-divider"></div>
          @if (count($services) !== 0)
            <p class="section-description">{{$services[0]->section_description}}</p>
          @else
            <p class="section-description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium</p>
          @endif
        </div>
      </div>

      <div class="row">
          @if (count($services2) !== 0) 
            @foreach ($services2 as $service2)
              <div class="col-md-4 service-item">
                <div class="service-icon"><i class="{{$service2->service_icon}}"></i></div>
                  <h4 class="service-title"><a href="">{{$service2->service_title}}</a></h4>
                  <p class="service-description">{{$service2->service_description}}</p>
              </div>
            @endforeach  
            
          @else
            <div class="col-md-4 service-item">
              <div class="service-icon"><i class="far fa-desktop"></i></div>
              <h4 class="service-title"><a href="">Lorem Ipsum</a></h4>
              <p class="service-description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
            </div>
            <div class="col-md-4 service-item">
              <div class="service-icon"><i class="fas fa-chart-bar"></i></div>
              <h4 class="service-title"><a href="">Dolor Sitema</a></h4>
              <p class="service-description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
            </div>
            <div class="col-md-4 service-item">
              <div class="service-icon"><i class="fas fa-paper-plane"></i></div>
              <h4 class="service-title"><a href="">Sed ut perspiciatis</a></h4>
              <p class="service-description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
            </div>
            <div class="col-md-4 service-item">
              <div class="service-icon"><i class="fas fa-images"></i></div>
              <h4 class="service-title"><a href="">Magni Dolores</a></h4>
              <p class="service-description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
            </div>
            <div class="col-md-4 service-item">
              <div class="service-icon"><i class="fa fa-road"></i></div>
              <h4 class="service-title"><a href="">Nemo Enim</a></h4>
              <p class="service-description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
            </div>
            <div class="col-md-4 service-item">
              <div class="service-icon"><i class="fa fa-shopping-bag"></i></div>
              <h4 class="service-title"><a href="">Eiusmod Tempor</a></h4>
              <p class="service-description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
            </div>
          @endif
      </div>
    </div>
</section>