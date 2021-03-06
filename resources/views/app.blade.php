<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link href="{{asset('css/styles.css')}}" rel="stylesheet" />
        <title>Navigation bar</title>

        <script src="{{asset('scripts/scripts.js')}}"></script>
    </head>
    <body>
    <nav class="nav">
        <input type="checkbox" id="nav__checkbox" class="nav__checkbox">
        <label for="nav__checkbox" class="nav__toggle">
            <svg class="menu" viewBox="0 0 448 512" width="100" title="bars">
                <path d="M16 132h416c8.837 0 16-7.163 16-16V76c0-8.837-7.163-16-16-16H16C7.163 60 0 67.163 0 76v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z" />
            </svg>
            <svg class="close" viewBox="0 0 384 512" width="100" title="times">
                <path d="M242.72 256l100.07-100.07c12.28-12.28 12.28-32.19 0-44.48l-22.24-22.24c-12.28-12.28-32.19-12.28-44.48 0L176 189.28 75.93 89.21c-12.28-12.28-32.19-12.28-44.48 0L9.21 111.45c-12.28 12.28-12.28 32.19 0 44.48L109.28 256 9.21 356.07c-12.28 12.28-12.28 32.19 0 44.48l22.24 22.24c12.28 12.28 32.2 12.28 44.48 0L176 322.72l100.07 100.07c12.28 12.28 32.2 12.28 44.48 0l22.24-22.24c12.28-12.28 12.28-32.19 0-44.48L242.72 256z" />
            </svg>
        </label>
        <ul class="nav__menu">
            <li><a href="#">
                    <h2>Mon Ciné</h2>
                </a></li>
            <li><a href="/">Acceuil</a></li>
            <li><a href="/user/{id}/favoris">Favoris</a></li>
            <li><a href="{{route('films.index')}}">Films</a></li>
            <li><a href="/genres">Genres</a></li>
            <li><a href="/users">Utilisateurs</a></li>
            <li><a href="/login">Connexion</a></li>
            <li><a href="/signup">Inscription</a></li>
        </ul>
    </nav>
    @yield('content')

    </body>
</html>

