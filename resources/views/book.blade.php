@extends('layouts.main')

@section('container')

<!-- ======= About Section ======= -->
<section id="about">
    <div class="container" data-aos="fade-up">
      <div class="row">
        <div class="col-lg-5 about-img">
          <center><img src="assets/img/cover/{{ $book->cover }}" alt=""></center>
        </div>

        <div class="col-lg-7 content">
          <h2>{{ $book->title }}</h2>
          <h3>{{ $book->author }}</h3>
          <ul>
            <li><i class="bi bi-tag-fill"></i><b> IDR {{ $book->price }}</b></li>
            <li><div><button style="margin-right: 10px;" class="btn btn-primary" type="button">Buy</button><button class="btn btn-success" type="button">Add to Chart</button></div></li>
            <li></li><hr>
            <h4><b>Description :</b></h4> {{ $book->description }}
            <li></li><hr>
            <h4><b>Detail Product :</b></h4>
              <li>Publisher    : {{ $book->publisher }}</li>
              <li>Publish Date : {{ $book->publish_date }}</li>
              <li>Pages        : {{ $book->pages }}</li>
              <li>Language     : {{ $book->language }}
              <li>Category     : {{ $book->category }}
          </ul>

        </div>
      </div>

    </div>
  </section><!-- End About Section -->

@endsection