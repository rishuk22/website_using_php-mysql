<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Google</title>
  <link href="https://fonts.googleapis.com/css?family=Noto+Sans+HK" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <link href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
 
 
</head>
<body>

<nav class="navbar navbar-expand-lg bg-body">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Google_Web</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a href="https://mail.google.com/" class="navtext" id="apps">Gmail</a>
        </li>
      </ul>
      <ul  class="navbar-nav mb-2 mb-lg-0" >
        <li>
          <a href="#" class="navtext" id="apps">Apps&#x2192;</a>
      </li>
      <li>
      <a href="image.html"><span id="app" class="material-icons apps">apps</span></a>
      </li>
      
      <li class="nav-item dropdown" >
        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          VibeSphere
        </a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="VibeSphere.php">Go_To_Page</a></li>
         
          
        </ul>
      </li>
  
    </ul>
    </div>
  </div>
</nav>



<div class="form">
  <form action="https://www.google.com/search">
  <div class="main">
    <div class="abcd">
     
      <img src="googlelogoreal.png" alt="Google Logo" class="google" id="kum">
    </div>
   
    <div class="searchb">
      <span class="material-icons searchicon">search</span>
      <input type="text" id="searchInput" placeholder="Search Google or type a URL" name="q">
      <img src="miclogo.png" alt="Microphone" class="mic">
    </div>
   
    <div class="sbutton">
    <input type="submit"id="vik" value="Search" style="border-color:black">
      <input type="reset" id="riv"value="Refresh">
    </div>
  </div>
</form>

</div>


<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>