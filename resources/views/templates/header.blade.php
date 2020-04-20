<div id="preloader"></div>
@if (count($headers) !== 0)
  <section id="hero" style="background:url('{{asset('storage/'.$headers[0]->img_path)}}') top center;">
@else
  <section id="hero" style="background:url('{{asset('img/hero-bg.jpg')}}') top center;">
@endif
    <div class="hero-container">
      <div class="wow fadeIn">
        <div class="hero-logo">
          <img class="" src="img/logo.png" alt="Imperial">
        </div>
        <h1>Welcome to Imperial studios</h1>
        <h2>We create <span class="rotating">beautiful graphics, functional websites, working mobile apps</span></h2>
        <div class="actions">
          <a href="#about" class="btn-get-started">Get Strated</a>
          <a href="#services" class="btn-services">Our Services</a>
        </div>
      </div>
    </div>
</section>
<header id="header">
  <div class="container">

    <div id="logo" class="pull-left">
      <a href="#hero"><img src="img/logo.png" alt="" title="" /></a>
      <!-- Uncomment below if you prefer to use a text image -->
      <!--<h1><a href="#hero">Header 1</a></h1>-->
    </div>

    <nav id="nav-menu-container">
      <ul class="nav-menu">
        <li class="menu-active"><a href="#hero">Home</a></li>
        <li><a href="#about">About Us</a></li>
        <li><a href="#services">Services</a></li>
        <li><a href="#portfolio">Portfolio</a></li>
        <li><a href="#testimonials">Testimonials</a></li>
        <li><a href="#team">Team</a></li>
        <li><a href="#contact">Contact Us</a></li>
      </ul>
    </nav>
    <!-- #nav-menu-container -->
  </div>
</header>
