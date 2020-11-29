<!-- Navbar -->
<nav class="navbar navbar-expand-lg bg-white navbar-absolute navbar-transparent" >
    <div class="container">
        
        <div class="dropdown button-dropdown">
            <a href="#pablo" class="dropdown-toggle" id="navbarDropdown" data-toggle="dropdown">
                <span class="button-bar"></span>
                <span class="button-bar"></span>
                <span class="button-bar"></span>
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-header">Dropdown header</a>
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Separated link</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">One more separated link</a>
            </div>
        </div>
        
        <div class="navbar-translate">
            <a class="navbar-brand" href="{{route('home')}}"  rel="tooltip" title="Designed by Invision. Coded by Creative Tim" data-placement="bottom" >
                Blog Cool
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-bar top-bar"></span>
                <span class="navbar-toggler-bar middle-bar"></span>
                <span class="navbar-toggler-bar bottom-bar"></span>
            </button>
        </div>

        <div class="collapse navbar-collapse" data-nav-image="{{ asset('now-ui-kit/assets/img/blurred-image-1.jpg')}}" data-color="orange">
            <ul class="navbar-nav ml-auto">

                <li class="nav-item {{ setActiveRoute('blog') }}">
                    <a class="nav-link" href="{{route('blog')}}" style="font-size:1.2em;">
                        <i class="fas fa-newspaper "></i>
                        Blog
                    </a>
                </li>
                <li class="nav-item {{ setActiveRoute('aboutus') }}">
                    <a class="nav-link" href="{{route('aboutus')}}" style="font-size:1.2em;">
                        <i class="fas fa-address-card"></i>
                        Nosotros
                    </a>
                </li>
                <li class="nav-item {{ setActiveRoute('contact') }}">
                    <a class="nav-link" href="{{route('contact')}} "style="font-size:1.2em;">
                            <i class="fas fa-envelope"></i>
                        Contacto
                    </a>
                </li>
                
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}" style="font-size:1.2em;"> <i class="fas fa-sign-in-alt"></i> {{ __('Login') }} </a>
                        
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}" style="font-size:1.2em;"><i class="fas fa-pen"></i>  {{ __('Register') }} </a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre style="font-size:1.2em;">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class="fas fa-sign-out-alt"></i>
                                {{ __('Logout') }}
                            </a>
                            <a class="dropdown-item" href="{{route('dashboard')}}">
                                <i class="fas fa-cogs"></i>
                                Administración
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
<!-- End Navbar -->