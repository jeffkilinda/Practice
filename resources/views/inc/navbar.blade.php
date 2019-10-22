      <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
          <div class="container">
              <a class="navbar-brand" href="{{ url('/') }}">
                  {{ config('app.name', 'Super Predictions') }}
              </a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                  <span class="navbar-toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <!-- Left Side Of Navbar -->
                  <ul class="navbar-nav mr-auto">

                  </ul>
                  <ul class="navbar-nav mr-auto">
                      <li class="nav-item ">
                        <a class="nav-link" href="/">Home</a>
                      </li>

                    @if(Auth::user())
                      <li class="nav-item">
                        <a class="nav-link" href="/top">Top Tips</a>
                      </li>
                    @endif

                      <li class="nav-item">
                        <a class="nav-link" href="/yesterday">Previous Winnings</a>
                      </li>
                      <li class="dropdown nav-item">
                            <a class="dropbtn nav-link">Major Leagues 
                                    <span class="caret"></span>
                              
                            </a>
                            <ul class="dropdown-content">
                              <a href="/epl">EPL</a>
                              <a href="/laliga">La liga</a>
                              <a href="/serieA">Series A</a>
                              <a href="/bundesliga">Bundesliga</a>
                              <a href="#">France league 1</a>
                              <a href="/eredivisie">Eredivisie</a>
                              <a href="#">Portugal Primeira Liga</a>
                              <a href="#">Belgium First Division A</a>
                              <a href="#">Scotland Premiership</a>
                              <a href="#">Turkey Super Lig</a>
                             
                            </ul>
                        </li> 

                        <li class="nav-item">
                            <a class="nav-link" href="/posts">Contact Us</a>
                          </li>
                     
                    </ul>

                  <!-- Right Side Of Navbar -->
                  <ul class="navbar-nav ml-auto navbar-right">
                      <!-- Authentication Links -->
                      @guest
                          <li class="nav-item">
                              <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                          </li>
                          @if (Route::has('register'))
                              <li class="nav-item">
                                  <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                              </li>
                          @endif
                      @else
                          <li class="nav-item dropdown">
                              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                  {{ Auth::user()->name }} <span class="caret"></span>
                              </a>

                              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                  <a class="dropdown-item" href="{{ route('logout') }}"
                                     onclick="event.preventDefault();
                                                   document.getElementById('logout-form').submit();">
                                      {{ __('Logout') }}
                                  </a>

                                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                      @csrf
                                  </form>
                              </div>
                          </li>
                      @endguest
                  </ul>
              </div>
          </div>
      </nav>


      