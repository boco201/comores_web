
<nav class="navbar navbar-expand-md navbar-dark menu-header ">
     <div class="collapse navbar-collapse container-fluid" id="navbarSupportedContent">
                <a class="navbar-brand" href="{{ url('/') }}">
                     {{ config('app.name', 'laravel') }} 
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
      
    
      <li class="nav-item active">
        <a class="nav-link" href="/contact">CONTACT <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown nav-item active">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          FORMATION 
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="">A PROPOS <span class="sr-only">(current)</span></a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      
       </ul>
      </div>


                    <!-- Right Side Of Navbar -->
         <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
         <ul class="navbar-nav ml-auto">
                       <li class="nav-item active nav-item-post">
                           <a class="nav-link" href="">PUBLIER UNE ANNONCE <span class="sr-only">(current)</span></a>
                        </li>
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                              <a class="nav-link" href="{{ route('login') }}"><i class="fa fa-user"> {{ __("test.connecter") }}</i></a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                   <a class="nav-link" href="{{ route('register') }}"><i class="fa fa-user">{{ __("test.enregistrer") }}</i></a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <i class="fa fa-user"> {{ Auth::user()->name }} </i> <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <i class="fa fa-user"> {{ __("test.deconnecter") }} </i>
                                    </a>
                                    <a class="dropdown-item" href="/userprofil"><i class="fa fa-user"> Profile User</i></a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                 
               </li>
                
              
            </ul>
          
        </div>
      </div>
  </nav><br>

  <br>
  
       
   
          