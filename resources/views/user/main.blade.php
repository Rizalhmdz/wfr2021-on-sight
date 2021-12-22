@extends('layouts.user_main')
@section('container')
<!-- ======= hero Section ======= -->
<section id="hero">

    <div class="hero-content" data-aos="fade-up">
      <h2>Find Your Reading Books</h2>
      <div>
        <a href="#portfolio" class="btn-projects scrollto">Get Started</a>
      </div>
    </div>

    <div class="hero-slider swiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide" style="background-image: url('assets/img/hero-carousel/c1.jpg');"></div>
        <div class="swiper-slide" style="background-image: url('assets/img/hero-carousel/c2.jpg');"></div>
        <div class="swiper-slide" style="background-image: url('assets/img/hero-carousel/c3.jpg');"></div>
        <div class="swiper-slide" style="background-image: url('assets/img/hero-carousel/c4.jpg');"></div>
        <div class="swiper-slide" style="background-image: url('assets/img/hero-carousel/c5.jpg');"></div>
      </div>
    </div>

  </section><!-- End Hero Section -->

  <main id="main">

     <!-- ======= Portfolio Section ======= -->
     <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">
        {{-- <div class="section-header">
          <h2>Categories</h2>
          <p>Sed tamen tempor magna labore dolore dolor sint tempor duis magna elit veniam aliqua esse amet veniam enim export quid quid veniam aliqua eram noster malis nulla duis fugiat culpa esse aute nulla ipsum velit export irure minim illum fore</p>
        </div> --}}

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All books</li>
              <li data-filter=".filter-a">Literarture</li>
              <li data-filter=".filter-b">Engineering</li>
              <li data-filter=".filter-c">Discount</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

        @foreach ($literature_books as $book)
          <div class="col-lg-3 col-md-3 portfolio-item filter-a">
            <a href="/{{ $book->slug }}">
            <img src="{{ $book->image_url }}" class="img-fluid" alt="" style="height:350px;">
            <div class="portfolio-info">
              <h4>{{ $book->title }}</h4>
              <p>{{ $book->author->name }}</p></div>
            </a>
          </div>
        @endforeach

        @foreach ($engineering_books as $book)
          <div class="col-lg-3 col-md-3 portfolio-item filter-b">
            <a href="/{{ $book->slug }}">
            <img src="{{ $book->image_url }}" class="img-fluid" alt="" style="height:350px;">
            <div class="portfolio-info">
              <h4>{{ $book->title }}</h4>
              <p>{{ $book->author->name }}</p>
            </div>
            </a>
          </div>
        @endforeach

        @foreach ($discount_books as $book)
          <div class="col-lg-3 col-md-3 portfolio-item filter-c">
            <a href="/{{ $book->slug }}">
            <img src="{{ $book->image_url }}" class="img-fluid" alt="" style="height:350px;">
            <div class="portfolio-info">
              <h4>{{ $book->title }}</h4>
              <p>{{ $book->author->name }}</p>
              <a href="assets/img/cover/the last professional.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
              <a href="/{{ $book->slug }}" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
            </a>
          </div>
        @endforeach

        </div>

      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Services Section ======= -->
    <section id="services">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2>Services</h2>
          <p>Sed tamen tempor magna labore dolore dolor sint tempor duis magna elit veniam aliqua esse amet veniam enim export quid quid veniam aliqua eram noster malis nulla duis fugiat culpa esse aute nulla ipsum velit export irure minim illum fore</p>
        </div>

        <div class="row gy-4">

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="box">
              <div class="icon"><i class="bi bi-briefcase"></i></div>
              <h4 class="title"><a href="">Lorem Ipsum</a></h4>
              <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident etiro rabeta lingo.</p>
            </div>
          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <div class="box">
              <div class="icon"><i class="bi bi-card-checklist"></i></div>
              <h4 class="title"><a href="">Dolor Sitema</a></h4>
              <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata nodera clas.</p>
            </div>
          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
            <div class="box">
              <div class="icon"><i class="bi bi-bar-chart"></i></div>
              <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
              <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur trinige zareta lobur trade.</p>
            </div>
          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
            <div class="box">
              <div class="icon"><i class="bi bi-binoculars"></i></div>
              <h4 class="title"><a href="">Magni Dolores</a></h4>
              <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum rideta zanox satirente madera</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->


  </main><!-- End #main -->
  @endsection
