    <!-- Start of navbar -->
    <nav class="navbar navbar-expand-md navbar-light">
        <div class="container">
          <a href="#">
            <div class="nav-brand">
              Repo
              <img src="{{ asset('frontend/img/Group 885.svg') }}" alt="" class="nav-img" />
            </div>
          </a>
          <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav">
              <li class="nav-item">
                <a href="{{ url('/') }}" class="nav-link">Home</a>
              </li>
              <li class="nav-item">
                <a href="{{ route('frontend.references.index') }}" class="nav-link"
                  >Lecture's</a
                >
              </li>

              <li class="nav-item">
                <a href="{{ route('frontend.discussions.index') }}" class="nav-link">Forum</a>
              </li>

              <li class="nav-item">
                <a href="{{ route('frontend.blogs.index') }}" class="nav-link">Blog</a>
              </li>

              <li class="nav-item">
                <a href="{{ route('frontend.projects.index') }}" class="nav-link">Projects</a>
              </li>

              <li class="nav-item">
                <a href="{{ route('about-us') }}" class="nav-link">About</a>
              </li>
            </ul>

            <hr />

            <ul class="navbar-nav nav-left">
            @guest
            <!-- Right Side Of Navbar -->
              <!-- Authentication Links -->
              <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">Login</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">Sing up</a>
              </li>
              @else


              <li class="nav-item">
                <a id="navbarDropdown" class="nav-link" href="#" >
                    {{ Auth::user()->name }}
                </a>
              </li>

              <li class="nav-item">
                @if (Auth::user()->isAdmin())
                <a class="nav-link" href="{{ route('admin.home') }}">
                    {{ __('Admin') }}
                </a>
                @endif
            </li>


            <li class="nav-item">
                @if (!Auth::user()->isAdmin())
                <a class="nav-link" href="{{ route('frontend.profile.show', Auth::user()->id) }}">
                    {{ __('Profile') }}
                </a>
                @endif
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                 {{ __('Logout') }}
             </a>
            </li>








                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
              @endguest
            </ul>
          </div>
        </div>
      </nav>
      <!-- End of navbar -->
