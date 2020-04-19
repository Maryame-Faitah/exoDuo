<section id="portfolio">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          @if (count($portfolios1) !== 0)
            <h3 class="section-title">{{$portfolios1[0]->section_titre}}</h3>
          @else
            <h3 class="section-title">Portfolio</h3>
          @endif
          <div class="section-title-divider"></div>
          @if (count($portfolios1) !== 0)
            <p class="section-description">{{$portfolios1[0]->description}}</p>
          @else
            <p class="section-description">Si stante, hoc natura videlicet vult, salvam esse se, quod concedimus ses haec dicturum fuisse</p>
          @endif
        </div>
      </div>
      <div class="row">
        @if (count($portfolios) !== 0)
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
        @else
          <div class="col-md-3">
            <a class="portfolio-item" style="background-image: url(img/portfolio-1.jpg);" href="">
              <div class="details">
                <h4>Portfolio 1</h4>
                <span>Alored dono par</span>
              </div>
            </a>
          </div>
  
          <div class="col-md-3">
            <a class="portfolio-item" style="background-image: url(img/portfolio-2.jpg);" href="">
              <div class="details">
                <h4>Portfolio 2</h4>
                <span>Alored dono par</span>
              </div>
            </a>
          </div>
  
          <div class="col-md-3">
            <a class="portfolio-item" style="background-image: url(img/portfolio-3.jpg);" href="">
              <div class="details">
                <h4>Portfolio 3</h4>
                <span>Alored dono par</span>
              </div>
            </a>
          </div>
  
          <div class="col-md-3">
            <a class="portfolio-item" style="background-image: url(img/portfolio-4.jpg);" href="">
              <div class="details">
                <h4>Portfolio 4</h4>
                <span>Alored dono par</span>
              </div>
            </a>
          </div>
  
          <div class="col-md-3">
            <a class="portfolio-item" style="background-image: url(img/portfolio-5.jpg);" href="">
              <div class="details">
                <h4>Portfolio 5</h4>
                <span>Alored dono par</span>
              </div>
            </a>
          </div>
  
          <div class="col-md-3">
            <a class="portfolio-item" style="background-image: url(img/portfolio-6.jpg);" href="">
              <div class="details">
                <h4>Portfolio 6</h4>
                <span>Alored dono par</span>
              </div>
            </a>
          </div>
  
          <div class="col-md-3">
            <a class="portfolio-item" style="background-image: url(img/portfolio-7.jpg);" href="">
              <div class="details">
                <h4>Portfolio 7</h4>
                <span>Alored dono par</span>
              </div>
            </a>
          </div>
  
          <div class="col-md-3">
            <a class="portfolio-item" style="background-image: url(img/portfolio-8.jpg);" href="">
              <div class="details">
                <h4>Portfolio 8</h4>
                <span>Alored dono par</span>
              </div>
            </a>
          </div>
        @endif
      </div>
    </div>
  </section>