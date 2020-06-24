<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    



    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.css" rel="stylesheet">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
    <script src=" https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }


    </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->

                            <li>
                                <form action="/edit" class="inline">
                                    @csrf
                                <button class="button is-primary is-outlined"  onclick="{{route('profil')}}">Profil</button>
                                </form>
                            </li>
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
          <body>
            <nav class="navbar is-fixed-top" role="navigation" aria-label="Main navigation">
              @guest
              <div class="navbar-brand">
                <a href="/" class="navbar-item">
                    <img src='\images\LogoBdr.png'>
                </a>
              </div>
              <a class="navbar-item">
                <a href="/login" class="button is-primary">
                  <span class="icon">
                    <i class="fas fa-user"></i>
                  </span>
                  <span>Login</span>
                </a>
              </a>
            </nav>
              @else
              <div class="navbar-brand">
                <a href="/accueil" class="navbar-item">
                    <img src='\images\LogoBdr.png'>
                </a>
              </div>
              <!-- Nécessite des liens pour les <a> -->
              <div class="navbar-start">
                <a class="navbar-item" href={{ url("/accueil") }}>
                  Accueil
                </a>
                <div class="navbar-item">
                  <a class="navbar-item" {{ url("/search") }}>
                    Search
                  </a>

                </div>
              </div>
              <div class="navbar-end">
                
                
           
                <li class="nav-item dropdown">
                  <div class="dropdown-trigger">
                    <button class="button" aria-haspopup="true" aria-controls="dropdown-menu">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href={{ url("/profil/".Auth::user()->pseudo) }}> Profil </a>
                    
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>


                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                      </div>
                  </div>
                </li>
                <a class="navbar-item">
                  <a href={{url("/premium")}} class="button is-link">
                    <span class="icon">
                      <i class="fas fa-star"></i>
                    </span>
                    <span>Premium</span>
                  </a>
                </a>

              </div>
                @endguest


               


            </nav>
            @yield('content')
            <footer class="footer">
                <div class="content has-text-centered">
                  @php
                  echo "Nombre d'utilisateurs inscrits a ce jour : ".DB::table('users')->count();
                  @endphp
                  <br>
                  <p>
                    <strong>BDR</strong> by Loick DUMOULIN GREGOIRE, Mostafa KASSEM and Jean-Baptiste SCHNERB. The source code is licenced
                    <a href="http://opensource.org/licenses/mit-license.php">MIT</a>. The website content
                    is licensed <a href="http://creativecommons.org/licenses/by-nc-sa/4.0/">CC BY NC SA 4.0</a>.

                   
                  </p>
                </div>
              </footer>
              
            </body>
        </main>
    </div>

</body>
</html>
