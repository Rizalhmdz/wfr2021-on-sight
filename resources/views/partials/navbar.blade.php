 <!-- ======= Header ======= -->
 <header id="header" class="d-flex align-items-center">
    <div class="container d-flex justify-content-between">

      <div id="logo">
        <a href="{{ route('home') }}"><img src="assets/img/logo.png"  height="30" alt=""></a>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
        @if(Auth::user()->role->name == "Admin")
        @elseif(Auth::user()->role->name == "User")
            <li><a class="nav-link scrollto active" href="{{ route('home') }}">Home</a></li>
            <li><a class="nav-link scrollto" href="">My Chart</a></li>
            <li><a class="nav-link scrollto" href="">Favorites</a></li>
            <li><a class="nav-link scrollto" href="">About</a></li>
          @if(Auth::check() == false)
            <li><a class="nav-link scrollto" href="{{url('login')}}">Login</a></li>
            <li><a class="nav-link scrollto" href="{{url('register')}}">Register</a></li>
          @else
          <!-- <span class="image-circle"><img src="{{Auth::user()->image? Auth::user()->image_url:Auth::user()->default_img}}" width="30" alt=""></span> -->
        @endif
        @endif
        <li class="nav-item dropdown pe-3">

            <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
              {{-- <img src="assets/img/testimonial-1.jpg" alt="Profile" class="rounded-circle"> --}}
              <span class="d-none d-md-block dropdown-toggle ps-2">{{Auth::user()->name}}</span>
            </a><!-- End Profile Iamge Icon -->

            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
              <li class="dropdown-header">
                <h6>@ {{Auth::user()->username}}</h6>
                <span>USER ID : {{Auth::user()->id}}</span>
              </li>
              <li>
                <hr class="dropdown-divider">
              </li>

              <li>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <i class="bi bi-person"></i>
                  <span>My Profile</span>
                </a>
              </li>
              <li>
                <hr class="dropdown-divider">
              </li>

              <li>
                  <span><form method="POST" action="/logout">
                      @csrf
                      <center><input class="btn btn-failed" type="submit" value="LOGOUT"><center>
                      </form></span>

              </li>

            </ul><!-- End Profile Dropdown Items -->
          </li><!-- End Profile Nav -->
        </ul>

        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->


