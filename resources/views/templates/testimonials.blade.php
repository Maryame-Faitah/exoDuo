<section id="testimonials">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          @if (count($testimonials) !== 0)
            <h3 class="section-title">{{$testimonials[0]->section_title}}</h3>
          @else
            <h3 class="section-title">Testimonials</h3>  
          @endif
          <div class="section-title-divider"></div>
          @if (count($testimonials) !== 0)
            <p class="section-description">{{$testimonials[0]->section_description}}</p>
          @else
            <p class="section-description">Erdo lide, nora porodo filece, salvam esse se, quod concedimus ses haec dicturum fuisse</p>
          @endif
        </div>
      </div>
        @if (count($testimonials2) !== 0)
        @foreach ($testimonials2 as $testimonial2)
          @if ($testimonial2->id % 2 == 0)
            <div class="row w-100">
              <div class="col-md-3">
                <div class="profile">
                  <div class="pic"><img src="img/client-1.jpg" alt=""></div>
                  <h4>Saul Goodman</h4>
                  <span>Lawless Inc</span>
                </div>
              </div>
              <div class="col-md-9">
                <div class="quote">
                  <b><img src="img/quote_sign_left.png" alt=""></b> Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper. <small><img src="img/quote_sign_right.png" alt=""></small>
                </div>
              </div>
            </div>
          @else
            <div class="row w-100">
              <div class="col-md-9">
                <div class="quote">
                  <b><img src="img/quote_sign_left.png" alt=""></b> Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis architecto beatae. <small><img src="img/quote_sign_right.png" alt=""></small>
                </div>
              </div>
              <div class="col-md-3">
                <div class="profile">
                  <div class="pic"><img src="img/client-2.jpg" alt=""></div>
                  <h4>Sara Wilsson</h4>
                  <span>Odeo Inc</span>
                </div>
              </div>
            </div>
          @endif
        @endforeach
        @else
          <div class="row w-100">
            <div class="col-md-3">
              <div class="profile">
                <div class="pic"><img src="img/client-1.jpg" alt=""></div>
                <h4>Saul Goodman</h4>
                <span>Lawless Inc</span>
              </div>
            </div>
            <div class="col-md-9">
              <div class="quote">
                <b><img src="img/quote_sign_left.png" alt=""></b> Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper. <small><img src="img/quote_sign_right.png" alt=""></small>
              </div>
            </div>
          </div>

          <div class="row w-100">
            <div class="col-md-9">
              <div class="quote">
                <b><img src="img/quote_sign_left.png" alt=""></b> Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis architecto beatae. <small><img src="img/quote_sign_right.png" alt=""></small>
              </div>
            </div>
            <div class="col-md-3">
              <div class="profile">
                <div class="pic"><img src="img/client-2.jpg" alt=""></div>
                <h4>Sara Wilsson</h4>
                <span>Odeo Inc</span>
              </div>
            </div>
          </div>
        @endif

    </div>
  </section>