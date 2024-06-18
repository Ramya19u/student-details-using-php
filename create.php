<?php
    include "connection.php";
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $q = " INSERT INTO crud1(name, email, phone) VALUES ( '$name', '$email', '$phone' )";

        $query = mysqli_query($conn,$q);
    }
?>
<!DOCTYPE html>
<html>
<head>
 <title>CREATE</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <style>
        body{
            background-color: rgb(177, 208, 247);
        }
        </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php">STUDENT REGISTRATION</a>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a type="button" class="btn btn-link nav-link" href="create.php"><span style="font-size:larger;">Add New</span></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
 <div class="col-lg-6 m-auto">
 
 <form method="post">
 
 <br><br><div class="card">
 
 <div class="card-header bg-primary">
 <h1 class="text-light text-center">  Create New Member </h1>
 </div><br>

 <label> NAME: </label>
 <input type="text" name="name" class="form-control"><br> 

 <label> EMAIL: </label>
 <input type="text" name="email" class="form-control"> <br>

 <label> PHONE: </label>
 <input type="text" name="phone" class="form-control"> <br>
 <div class="d-grid gap-2 d-md-flex justify-content-md-center my-2">
                <button type="button" id="submit" class="btn btn-success">SUBMIT</button>
            </div>
            <div class="d-grid gap-2 d-md-flex justify-content-md-center my-2">
                <button type="button" id="submit" class="btn btn-warning">CANCEL</button>
            </div>

 </div>
 </form>
 </div>
</body>
</html><?php
    include "connection.php";
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $q = " INSERT INTO crud2(name, email, phone) VALUES ( '$name', '$email', '$phone' )";

        $query = mysqli_query($conn,$q);
    }
?>