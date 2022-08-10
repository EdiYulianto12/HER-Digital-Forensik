<?php 
if (!isset($_SESSION)) session_start();
$sessionname='mss'.date('Ymd');
if (empty($_SESSION[$sessionname])) {
	echo "<script>window.location.href='index.php';</script>";
	exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>10 Contoh Desain Web</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
   <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="javascript:void(0)"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mynavbar">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link" href="beranda.php" target="frmmutama">Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://id.000webhost.com/daftar-website-gratis" onclick="return confirm('Apakah Anda akan Masuk Laman Website Gratis ?')"target="frmmutama" >Domain </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://www.w3schools.com" onclick="return confirm('Apakah Anda akan Masuk Laman Support Website  ?')"target="frmmutama">Support</a>
        
		<li class="nav-item">
          <a class="nav-link" href="logout.php">Log out</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="text" placeholder="Search">
        <button class="btn btn-primary" type="button">Search</button>
      </form>
    </div>
  </div>
</nav>
<div class="container-fluid mt-3">
  <iframe src="beranda.php" name="frmmutama" width="100%" height="600px"></iframe>  
</div>
<div class="container-fluid mt-3">
	<iframe href="https://id.000webhost.com/daftar-website-gratis" name="frmmutama" width="100%" height="600px"></iframe>	
</div>
<div class="container-fluid mt-3">
  <iframe  href="https://www.w3schools.com" name="frmmutama" width="100%" height="600px"></iframe>  
</div>


</body>
</html>
