<header>
  <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light">
      <a class="navbar-brand" href="/home">
        <i class="fas fa-boxes"></i>My Articles
      </a>
      <button class="navbar-toggler ml-md-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto text-center">
          <li class="nav-item active  mr-lg-3">
            <a class="nav-link" href="/home">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <!-- <li class="nav-item  mr-lg-3">
            <a class="nav-link" href="{{asset('bootstrap/about.html')}}">about</a>
          </li> -->
          <li class="nav-item  mr-lg-3">
            <a class="nav-link" href="/add_articles">Add Article</a>
          </li>
          <li class="nav-item dropdown mr-lg-3">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
              aria-expanded="false">
              Category
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="/islamic">Islamic</a>
              <a class="dropdown-item" href="/health">Health</a>
             <!--  <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="{{asset('bootstrap/about.html')}}">Stats</a>
            </div> -->
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/my_profile">My Profile</a>
          </li>
        </ul>

         <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        @guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a style="color: black; " href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" style="text-align: center; background-color: #ffd966;">
                                    <li>
                                        <a style="color: black;" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
        
        <!-- <div class="buttons">
          <button type="button" class="btn btn-info btn-lg-block w3ls-btn px-4 text-uppercase mr-2" data-toggle="modal"
            aria-pressed="false" data-target="#exampleModal">
            Login
          </button>
          <button type="button" class="btn btn-info btn-lg-block w3ls-btn1 px-4 text-uppercase" data-toggle="modal"
            aria-pressed="false" data-target="#exampleModal1">
            Register
          </button>
        </div> -->
        
      </div>
    </nav>
  </div>
</header>