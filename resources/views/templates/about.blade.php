<section id="about">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title">{{$abouts[0]->section_titre}}</h3>
          <div class="section-title-divider"></div>
          <p class="section-description">{{$abouts[0]->description}}</p>
        </div>
      </div>
    </div>
    <div class="container about-container wow fadeInUp">
      <div class="row">

        <div class="col-lg-6 about-img">
          <img src="{{asset('storage/'.$abouts[0]->img_path)}}" alt="">
        </div>

        <div class="col-md-6 about-content">
          <h2 class="about-title">{{$abouts[0]->sous_titre}}</h2>
          <p class="about-text">
            {{$abouts[0]->texte}}
          </p>
        </div>
      </div>
    </div>
</section>