<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.0/css/bulma.min.css">





        <!-- Styles -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.0/css/bulma.min.css">
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
        <!-- Scripts -->
        <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
        <script src="https://kit.fontawesome.com/5bf6d38320.js" crossorigin="anonymous"></script>

    </head>
    <body class="has-navbar-fixed-top">
      <nav class="navbar is-fixed-top" role="navigation" aria-label="Main navigation">
        <div class="navbar-brand">
          <a class="navbar-item">
            <img src='\images\LogoBdr.png'>
          </a>
        </div>

        <!-- Nécessite des liens pour les <a> -->
        <div class="navbar-start">
          <a class="navbar-item" href="discovery">
            Discovery
          </a>
          <div class="navbar-item">
            <a class="navbar-item" href="search">
              Search
            </a>

          </div>
        </div>
        <div class="navbar-end">
          <a class="navbar-item">
            <a href="profil" class="button is-primary">
              <span class="icon">
                <i class="fas fa-user"></i>
              </span>
              <span>MyProfile</span>
            </a>
          </a>

          <a class="navbar-item">
            <a href="premium" class="button is-link">
              <span class="icon">
                <i class="fas fa-star"></i>
              </span>
              <span>Premium</span>
            </a>
          </a>

        </div>


      </nav>
      @yield ('content')
      
    </body>
    </html>
