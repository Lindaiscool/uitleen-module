{{-- <body class="antialiased">
    <div class="relative flex items-top justify-center min-h-screen sm:items-center py-4 sm:pt-0" style="background-color: rgb(29, 29, 29);">

</body> --}}
<head>
    <style>
        .dropdown-item{
            color:rgb(158, 158, 158);
        }
        .dropdown-item:hover{
            background-color: rgb(250, 163, 1);
            color: white;
        }
        .sub1{
            background-color: rgb(3, 153, 3);
            border: 2px solid green;
        }
        .sub1:hover{
            background-color: rgb(3, 173, 3);
            border: 2px solid rgb(1, 145, 1);
        }
    </style>
</head>
<body class="antialiased" >
  
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: rgba(0, 0, 0, 0.3);">
        <a class="navbar-brand" href="#"><img height="40px" width="40px" src="/pics/logotje.png"></a>
      
    
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item"> 
                    <a href="/" class="nav-link" id="nav">Home</a>
                </li>
                @auth
                <li class="nav-item">
                    <a href="uitleen" class="nav-link" id="nav">Uitleen</a>
                </li>
                
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:rgb(145, 145, 145);">
                      Admin
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color: rgb(24, 24, 24); margin-top:0.9rem;">
                      <a class="dropdown-item" href="boeken">Boeken</a>
                      <a class="dropdown-item" href="arduino">Arduino</a>
                      <a class="dropdown-item" href="sensoren">Sensoren</a>
                    </div>
                  </li>

                  <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <div class="nav-item" style="margin-left:65rem; height:3px;">
                        <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                    this.closest('form').submit(); " role="button">
                            <i class="fas fa-sign-out-alt"></i>
            
                            {{ __('Log Out') }}
                        </a>
                    </div>
                </form>
                @endauth
            </ul>
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <li class="ms-3" style="list-style-type:none;"><a class="text-muted" href="/">
                                <div class=logo></div>
                            </a></li>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>
    
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"
                                class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Registreter</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
    </nav>
    