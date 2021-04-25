<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ $title ?? 'La Messagerie' }}</title>
  <link rel="stylesheet" href="/css/app.css">
</head>
<body>
<header class="topnav">
    <div class="inner">
        <nav>
        <a class="neo-btn" href="/">Messagerie</a>
        </nav>
        <nav>
            <a class="neo-btn" href="/login">Se connecter</a>
            <a class="neo-btn" href="/signup">Créer un compte</a>
        </nav>
    </div>
    <div class="hamburger-menu">
    <input id="menu__toggle" type="checkbox" />
    <label class="menu__btn" for="menu__toggle">
    <span></span>
    </label>
  <ul class="menu__box">
    <li><a class="menu__item" href="/">Messagerie</a></li>
    <li><a class="menu__item" href="/login">Se connecter</a></li>
    <li><a class="menu__item" href="/signup">Créer un compte</a></li>
  </ul>
</div>
</header>
{{$slot}}
<script src="/js/app.js"></script>
</body>
</html>