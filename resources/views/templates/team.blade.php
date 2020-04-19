<section id="team">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title">{{$teams1[0]->section_titre}}</h3>
          <div class="section-title-divider"></div>
          <p class="section-description">{{$teams1[0]->description}}</p>
        </div>
      </div>

      <div class="row">
        @foreach ($teams as $team)
        <div class="col-md-3">
          <div class="member">
            <div class="pic"><img src="{{asset('storage/'.$team->img_path)}}" alt=""></div>
            <h4>{{$team->img_titre}}</h4>
            <span>{{$team->img_description}}</span>
            <div class="social">
              <a href=""><i class="fab fa-twitter" value="{{$team->url1}}"></i></a>
              <a href=""><i class="fab fa-facebook" value="{{$team->url2}}"></i></a>
              <a href=""><i class="fab fa-google-plus" value="{{$team->url3}}"></i></a>
              <a href=""><i class="fab fa-linkedin-in" value="{{$team->url4}}"></i></a>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </section>