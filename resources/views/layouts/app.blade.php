<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>L'ENVOL - Le Plan de Vol</title>

        <!-- Styles -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.1/css/bulma.css" rel="stylesheet">
    </head>
    <body>






                        <div class="navbar-start">
                           <figure class="image is-small">
                            <img class="navbar-item" src="{{ asset('images/logo_plandevol.png') }}">
                                </figure>


                        <div class="navbar-end">
                            @if (Auth::guest())
                                <a class="navbar-item " href="{{ route('login') }}">Connexion</a>
                                <a class="navbar-item " href="{{ route('register') }}">Inscription</a>
                            @else
                                <div class="navbar-item has-dropdown is-hoverable">
                                    <a class="navbar-link" href="/profil">{{ Auth::user()->name }} - Profil</a>



                                    <div class="navbar-dropdown">
                                        <a class="navbar-item" href="{{ route('home') }}">Accueil</a>
                                        <a class="navbar-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                            Déconnexion
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                              style="display: none;">
                                            {{ csrf_field() }}
                                        </form>

                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </nav>




            @yield('content')
        </div>
        <footer class="footer">
  <div class="content has-text-centered">
    <p>
      <strong>Le Plan de Vol</strong> : une application réalisée pour L'Envol, le campus de La Banque Postale.</a>

    </p>

    <p><a href="/mentions" target="_blank">Mentions légales</a></p>
  </div>
</footer>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>