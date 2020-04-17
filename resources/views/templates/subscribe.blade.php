<section id="subscribe">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-8">
          <h3 class="subscribe-title">Subscribe For Updates</h3>
          <p class="subscribe-text">Join our 1000+ subscribers and get access to the latest tools, freebies, product announcements and much more!</p>
        </div>
        <div class="col-md-4 subscribe-btn-container">
              @if(count($subscribes) !== 0)
                @foreach ($subscribes as $subscribe)
                  <a class="subscribe-btn" href="{{$subscribe->url_subscribe}}">Subscribe Now</a>
                @endforeach
              @else
                <a class="subscribe-btn" href="#">Subscribe Now</a>
              @endif

        </div>
      </div>
    </div>
  </section>