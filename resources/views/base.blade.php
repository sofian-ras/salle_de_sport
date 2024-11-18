<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Salle de Musculation</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <header class="header-bar">
        <nav class="navigation">
            <a href="{{ route('home') }}" class="nav-link">Accueil</a>
            <a href="{{ route('cours') }}" class="nav-link">Cours</a>
            <a href="{{ route('tarifs') }}" class="nav-link">Tarifs</a>
            <a href="{{ route('contact') }}" class="nav-link">Contact</a>

        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <ul>
            <li><a href="#">facebook</a></li>
            <li><a href="#">instagram</a></li>
            <li><a href="#">TikTok</a></li>
        </ul>
        <ul>
            <li>NATION GYM</li>
            <li>copyright 2024</li>
            <li>Tous droits réservés</li>
            <li><a href="{{ route('mentions-legales') }}">Mentions Légales</a></li>
        </ul>
    </footer>
</body>

</html>
