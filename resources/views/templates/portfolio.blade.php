<section id="portfolio">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title">{{$portfolios1[0]->section_titre}}</h3>
          <div class="section-title-divider"></div>
          <p class="section-description">{{$portfolios1[0]->description}}</p>
        </div>
      </div>
      <div class="row">
        @foreach ($portfolios as $portfolio)
          <div class="col-md-3">
            <a class="portfolio-item" style="background-image: url('{{asset('storage/'.$portfolio->img_path)}}');" href="">
              <div class="details">
                <h4>{{$portfolio->img_titre}}</h4>
                <span>{{$portfolio->img_description}}</span>
              </div>
            </a>
          </div>
        @endforeach
      </div>
    </div>
  </section>