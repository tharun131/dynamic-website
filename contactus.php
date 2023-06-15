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

<section class="my-5">
    <div class="py-5">
        <h2 class="text-center">Contact Us</h2>
    </div>

    <div class="w-50 m-auto">
        <form action="Userinfo.php" method="post">
            <div class="form-group">
              <label for=" ">Username</label>
              <input type="text" name="user"  autocomplete="off" class="form-control">
            </div>
            <div class="form-group">
              <label for=" ">Email Id</label>
              <input type="text" name="email"  autocomplete="off" class="form-control">
            </div>
            <div class="form-group">
              <label for=" ">Mobile</label>
              <input type="text" name="mobile"  autocomplete="off" class="form-control">
            </div>
            <div class="form-group">
              <label for=" ">Comment</label>
              <textarea class="form-control"></textarea>
            </div>
            <button type="submit" class="btn btn-success" >Submit</button>
        </form>
    </div>

</section>

<footer>
    <p class="p-3 bg-dark text-white text-center">Copyright &copy; 2023</p>
</footer>

</body>
</html>