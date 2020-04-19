<section id="team">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          @if (count($teams1) !== 0)
            <h3 class="section-title">{{$teams1[0]->section_titre}}</h3>
          @else
            <h3 class="section-title">Our Team</h3>
          @endif
          <div class="section-title-divider"></div>
          @if (count($teams1) !== 0)
            <p class="section-description">{{$teams1[0]->description}}</p>
          @else
            <p class="section-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
          @endif
        </div>
      </div>

      <div class="row">
        @if (count($teams) !== 0)
          @foreach ($teams as $team)
          <div class="col-md-3">
            <div class="member">
              <div class="pic"><img src="{{asset('storage/'.$team->img_path)}}" alt=""></div>
              <h4>{{$team->img_titre}}</h4>
              <span>{{$team->img_description}}</span>
              <div class="social">
                <a href=""><i class="fab fa-twitter" value="{{$team->url1}}"></i></a>
                <a href=""><i class="fab fa-facebook" value="{{$team->url2}}"></i></a>
                <a href=""><i class="fab fa-google-plus-g" value="{{$team->url3}}"></i></a>
                <a href=""><i class="fab fa-linkedin-in" value="{{$team->url4}}"></i></a>
              </div>
            </div>
          </div>
          @endforeach
        @else
          <div class="col-md-3">
            <div class="member">
              <div class="pic"><img src="img/team-1.jpg" alt=""></div>
              <h4>Walter White</h4>
              <span>Chief Executive Officer</span>
              <div class="social">
                <a href=""><i class="fab fa-twitter"></i></a>
                <a href=""><i class="fab fa-facebook-f"></i></a>
                <a href=""><i class="fab fa-google-plus-g"></i></a>
                <a href=""><i class="fab fa-linkedin-in"></i></a>
              </div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="member">
              <div class="pic"><img src="img/team-2.jpg" alt=""></div>
              <h4>Sarah Jhinson</h4>
              <span>Product Manager</span>
              <div class="social">
                <a href=""><i class="fab fa-twitter"></i></a>
                <a href=""><i class="fab fa-facebook-f"></i></a>
                <a href=""><i class="fab fa-google-plus-g"></i></a>
                <a href=""><i class="fab fa-linkedin-in"></i></a>
              </div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="member">
              <div class="pic"><img src="img/team-3.jpg" alt=""></div>
              <h4>William Anderson</h4>
              <span>CTO</span>
              <div class="social">
                <a href=""><i class="fab fa-twitter"></i></a>
                <a href=""><i class="fab fa-facebook-f"></i></a>
                <a href=""><i class="fab fa-google-plus-g"></i></a>
                <a href=""><i class="fab fa-linkedin-in"></i></a>
              </div>
            </div>
          </div>
  
          <div class="col-md-3">
            <div class="member">
              <div class="pic"><img src="img/team-4.jpg" alt=""></div>
              <h4>Amanda Jepson</h4>
              <span>Accountant</span>
              <div class="social">
                <a href=""><i class="fab fa-twitter"></i></a>
                <a href=""><i class="fab fa-facebook-f"></i></a>
                <a href=""><i class="fab fa-google-plus-g"></i></a>
                <a href=""><i class="fab fa-linkedin-in"></i></a>
              </div>
            </div>
          </div>
        @endif
      </div>
    </div>
  </section>