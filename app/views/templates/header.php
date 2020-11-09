<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Halaman <?= $data['judul']; ?></title>	
	<link rel="stylesheet" href="<?= BASEURL;?>/css/bootstrap.css">
</head>
<body>

 <nav class="navbar navbar-expand-lg navbar-light" style =" background-color: red;">
 
        <a class="navbar-brand" href="#">DETAIL ARTIKEL</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Cari Berita" >
            <button class="btn btn-danger btn-lg" style="background-color:whitesmoke; color:black; height:40px; font-size:medium;" type="submit">Cari</button>
          </form>
        </div>
     
  </nav>

  		<?php
		$date = new DateTime();
		echo $date->format('l, d F Y ');  ?>

   <hr>
        <hr>

       