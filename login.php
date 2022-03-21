<!DOCTYPE html>
 <html>
 <head>
 <title>Login | toko</title>
 <!-- ----------------------- MEMASUKKAN STYLE --------------------------- -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
 
 <link rel="stylesheet" type="text/css" href="style/style.css">
 <!-- <link rel="stylesheet" type="text/css" href="style/css/bootstrap.css"> -->
 </head>
<body style="background:#cccccc">
<br> <br> <br> <br>
 <div class="container h-100">
 <div class="card text-center justify-content-center card-primary">
 <div class="card-header">
 <b>Selamat datang di tokoku</b>
 </div>
 <div class="card-body ">
 <div class="row justify-content-center mt-5">
 <div class="col-md-4">
 <div class="card">
 <div class="card-header bg-transparent">
 <h5 class="text-center">Silahkan <span class="font-weight-bold textprimary">MASUK</span></h5></div>
 <div class="card-body">
 <!-- ------------------------- MEMBUAT FORM --------------------------------- -->
 <form action="masuk.php" method="post">
 <div class="form-group">
 <input type="text" name="username" class="form-control" placeholder="Username">
 </div>
 <div class="form-group mt-3">
 <input type="password" name="password" class="form-control" placeholder="Password">
 </div>
 <div class="form-group custom-control custom-checkbox">
 <input type="checkbox" class="custom-control-input" id="customControlAutosizing">
 <label class="custom-control-label" for="customControlAutosizing">Remember me</label>
 </div>
 <div class="form-group">
 <input type="submit" name="" value="Login" class="btn btn-primary w-100">
 </div>
 </form>
 <!-- ------------------------- MEMBUAT FORM --------------------------------- -->
 </div>
 </div>
 <br>
 </div>
 </div>
 </div>
 <div class="card-footer text-muted">
 UKK SMKN 1 Bulukerto &copy; 2021
 </div>
 </div>
</body>
</html>