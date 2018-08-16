 <div class="header">
            <a href="#default" class="logo"><img src=" {{ URL::asset('images/logo.jpg') }}" rel="stylesheet" /></a>
            <div class="header-right">
            @if (Auth::guest())
                           <a href="{{ route('login') }}">Login</a>
                            <a href="{{ route('register') }}">Register</a>
                        @else
               
                        <!-- <li class="dropdown"> -->
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    Welcome {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <!-- <ul class="dropdown-menu" role="menu"> -->
                                  
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                   
                                <!-- </ul> -->
                            <!-- </li> -->

                        @endif

              <a class="active" href="/">Home</a>
              <a href="#contact">Contact</a>
              <a href="#about">About</a>
            </div>
</div>
     