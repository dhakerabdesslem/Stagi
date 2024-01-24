<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Stagi - Home Page</title>
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
  <header>
<div class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Stagi</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/">Stagi</a>
      </div>
      <div class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
          <li><a class="active" href="/"><span class="glyphicon glyphicon-home"></span> Home</a></li>
          <li><a  href="/enseignants"><span class="glyphicon glyphicon"></span>Enseignants</a></li>
          <li><a  href="/getetudiant"><span class="glyphicon glyphicon"></span>Etudiants</a></li>
          <li><a  href="/pfes/index"><span class="glyphicon glyphicon"></span>PFES</a></li>
          <li><a  href="/societes"><span class="glyphicon glyphicon"></span>Societes</a></li>

          
        </ul>
        <ul class="nav navbar-nav navbar-right">
      <li><a href="{{ route('inscrire') }}"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="{{ route('login') }}"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
      </div>
    </div>
  </div>
</div>
<div class="jumbotron">
  <h1>Stagi</h1>      
  <p>Bienvenue sur notre Plateforme </p>
</div>
</header>
</div>
  <footer>
    <sub>Powred By IMSET Sousse</sub>
  </footer>
</body>
</html>
