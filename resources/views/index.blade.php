<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>page index</title>
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <header>
  <div class="col-lg-3 bg-dark d-none d-lg-block">
            <a href="welcome.blade.php" class="navbar-brand w-100 h-100 m-0 p-0 d-flex align-items-center justify-content-center">
                <img src="" style="max-width: 80px; max-height: 80px;">
            </a>
        </div>
    <h1>Bienvenue sur notre application <span style="color:red"> stagi</span></h1>
  </header>

  <div class='page'>
   <div class='container'>
     <button class="w3-btn w3-border w3-jumbo" ><a class='item' href="{{ route('inscrire') }}">
       <p>s'inscrire</p>
       </a> </button>
      <button class="w3-btn w3-border w3-jumbo"> <a class='item' href="{{ route('login') }}">
       <p>Connexion</p>
     </a>
     </button>
    </div>
 </div> 
</div>
  <footer>
    <p>Contactez-nous : contact@imset.tn</p>
    numero telephone : (+216) 71 79 66 79
    <sub>powred by IMSET sousse</sub>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
