<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset='UTF-8'/>
    <title>menu</title>
    <link rel='stylesheet' href='css/IMSET.css'/>
  </head>
  <body>
    <h1 align="center">options principales</h1>
  <div class='page'>
   <div class='container'>
    <a class='item' href="{{ route('getetudiant') }}">
      <p>informations</p>
     </a>
     <a class='item' href="{{ route('enseignant') }}">
       <p>enseignant(e)</p>
     </a>
     <a class='item' href="{{ route('PFE') }}">
       <p>PFE</p>
     </a>
     <a class='item' href="{{ route('societe') }}">
       <p>sociéte</p>
     </a>
    </div>
 </div> 
  </body>
</html>

