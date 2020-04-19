<section id="about">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          @if (count($abouts) !== 0)
            <h3 class="section-title">{{$abouts[0]->section_titre}}</h3>
          @else
            <h3 class="section-title">About Us</h3>
          @endif
          
          <div class="section-title-divider"></div>
          @if (count($abouts) !== 0)
            <p class="section-description">{{$abouts[0]->description}}</p>
          @else
            <p class="section-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam</p>
          @endif
      
        </div>
      </div>
    </div>
    <div class="container about-container wow fadeInUp">
      <div class="row">

        <div class="col-lg-6 about-img">
          @if (count($abouts) !== 0)
            <img src="{{asset('storage/'.$abouts[0]->img_path)}}" alt="">
          @else
            <img src="{{asset('img/about-img.jpg')}}" alt="">
          @endif
    
        </div>

        <div class="col-md-6 about-content">
          @if (count($abouts) !== 0)
            <h2 class="about-title">{{$abouts[0]->sous_titre}}</h2>
          @else
            <h2 class="about-title">We provide great services and ideass</h2>
          @endif

          @if (count($abouts) !== 0)
            <p class="about-text">{{$abouts[0]->texte}}</p>
          @else
            <p class="about-text">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
              in reprehenderit in voluptate
            </p>
            <p class="about-text">
              Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim
              id est laborum
            </p>
            <p class="about-text">
              Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt molli.
            </p>
          @endif
        </div>
      </div>
    </div>
</section>