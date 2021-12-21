 <!-- ======= Header ======= -->
 <header id="header" class="d-flex align-items-center">
    <div class="container d-flex justify-content-between">

      <div id="logo">
        <a href="/"><img src="assets/img/logo.png"  height="30" alt=""></a>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="/">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">My Chart</a></li>
          <li><a class="nav-link scrollto" href="#services">Favorites</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
        @if(Auth::check() == false)
          <li><a class="nav-link scrollto" href="{{url('login')}}">Login</a></li>
          <li><a class="nav-link scrollto" href="{{url('register')}}">Register</a></li>
        @else
        <!-- <span class="image-circle"><img src="{{Auth::user()->image? Auth::user()->image_url:Auth::user()->default_img}}" width="30" alt=""></span> -->

          @if(Auth::user()->role->name == "Admin")
          @elseif(Auth::user()->role->name == "User")
          @else
          @endif


            <li class="nav-item dropdown pe-3">

                <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                  {{-- <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle"> --}}
                  <span class="d-none d-md-block dropdown-toggle ps-2">{{Auth::user()->name}}</span>
                </a><!-- End Profile Iamge Icon -->

                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                  <li class="dropdown-header">
                    <h3>{{Auth::user()->name}}</h3>
                    <span>USERID : {{Auth::user()->id}} </span>
                  </li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>

                  <li>
                    <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                      <i class="bi bi-person"></i>
                      <span>Profile</span>
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
                    </a>
                  </li>@endif
                </ul><!-- End Profile Dropdown Items -->
              </li><!-- End Profile Nav -->
        </ul>

        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

