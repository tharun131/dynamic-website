<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
  <style>
  @import url('https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@200&display=swap');
</style>
</head>
<body>

<?php include 'menu.php';?>

<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images\cc13.jpg" alt="GT WEB COMPANY" width="1100" height="500">
      <div class="carousel-caption">
        <h3>GT WEB COMPANY</h3>
        <p>It is the place where total website is made.</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images\cc11.jpg" alt="OUR Partners" width="1100" height="500"  >
      <div class="carousel-caption">
        <h3>OUR Customers</h3>
        <p>Thank you all for beliving Us.</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images\cc12.webp" alt="OUR OFFICE" width="1100" height="500">
      <div class="carousel-caption">
        <h3>OUR OFFICE</h3>
        <p>Hytech City,Hyderabad.<</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<footer>
    <p class="p-3 bg-dark text-white text-center">Copyright &copy; 2023</p>
</footer>




  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>