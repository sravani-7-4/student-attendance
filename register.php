<?php
  include 'connect.php';

?>
<html>
<head>
  <meta charset="UTF-8">
  <meta name=""viewport content="width=device-width initial scale=1">
  <title>Attendence Portal</title>
  <link href="style.css" rel="stylesheet" type="text/css">
  <!-- bootstrap scripts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <!-- css stylesheet -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/97c47f4142.js" crossorigin="anonymous"></script>
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital@1&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&family=Ubuntu:wght@500&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


  
</head>
<body>
<div class="container">
  <nav class="navbar navbar-expand-lg ">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Student attendance system</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="login.php" active>Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="register.php">Signup</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="student.php">Student</a>
          </li>

        </ul>

      </div>
    </div>
  </nav>
</div> 

<?php 

if(isset($_POST['remail']))
{
  $email = stripslashes($_POST['remail']);
  $email = mysqli_real_escape_string($con,$email);
  $name = stripslashes($_POST['rname']);
  $name = mysqli_real_escape_string($con,$name);
  $pswd = stripslashes($_POST['rpswd']);
  $pswd = mysqli_real_escape_string($con,$pswd);
  if($email == '' || $pswd == '' || $name == '')
  {
      echo '
      <script type="text/javascript">
      alert("Please fill all the details");
      window.location.href="register.php"
      </script>';
  }
  else 
  {
    $sql = "insert into `lr` (email,name,pswd) values ('$email','$name','".md5($pswd)."')"; 
    $res = mysqli_query($con,$sql);
    if($res)
    {
      echo '
      <script type="text/javascript">
      alert("you have successfully submitted");
      window.location.href="login.php";
      </script>';
    }
    else 
    {
      echo '
      <script type="text/javascript">
      alert("Please fill all the details");
      window.location.href="register.php";
      </script>';
    }
  }
}

?>

<section>
  <div class="container-fluid">
    <div class="row d-flex justify-content-center align-items-center ">
      <div class="col-md-9 col-lg-6 col-xl-5 mb-5">
        <img src="loginpic.webp" class="img-fluid" alt="Sample image">
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1 mb-3">
        <form method="post">
          <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
            <p class="lead fw-normal mb-0 me-3"><b>Sign up</b></p>
          </div>

          <div class="divider d-flex align-items-center my-4">
          </div>

          <!-- Email input -->
          <div class="form-outline mb-4">
          <label class="form-label" for="form3Example3">Email address</label>
            <input type="email" id="form3Example3" class="form-control form-control-lg"
              placeholder="Enter a valid email address" name="remail"/>
          </div>

          <div class="form-outline mb-4">
          <label class="form-label" for="form3Example2">Name</label>
            <input type="text" id="form3Example2" class="form-control form-control-lg"
              placeholder="Enter your name" name="rname"/>
          </div>

          <!-- Password input -->
          <div class="form-outline mb-3">
          <label class="form-label" for="form3Example4">Password</label>
            <input type="password" id="form3Example4" class="form-control form-control-lg"
              placeholder="Enter password" name="rpswd"/>
          </div>


          <div class="text-center text-lg-start mt-4 pt-2">
            <input type="submit" class="btn btn-primary btn-lg"
              style="padding-left: 2.5rem; padding-right: 2.5rem;background-color:#00ABB3;" name="register" value="Register" />
              <p class="small fw-bold mt-2 pt-1 mb-0">Back to <a href="login.php"
                class="link-danger">Login</a></p>
          </div>

        </form>
      </div>
    </div>
  </div>
</section>
<footer id="footer">
      <div class="dfoot">
        <p class="foot"> <b>Mail: student@gmail.com</b></p>
        <p class="foot"></i> <b>Contact: +91 909348643</b></p>
        <p class="foot"><b>Created by: Sravani | Geethika | Raja | Charith</b> </p><br>
        <p>@copyright2022</p>

      </div>

    </footer>
</body>
</html>