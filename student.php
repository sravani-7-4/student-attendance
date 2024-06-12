<?php
  include 'connect.php';

?>

<!doctype html>
<html lang="en">
  <head>
    <title>Attendence Portal</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- css -->
    <link rel="stylesheet" href="main.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

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

    <!-- navigation bar -->
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
          <a class="nav-link active" aria-current="page" href="login.php">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="register.php">Signup</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="student.php" active>Student</a>
        </li>

      </ul>

    </div>
  </div>
</nav>

</div>



<!-- main contents -->
<div class="container main">
<div>
    <form method="post" >
      <div class="row form-group">
        <label for="year" class="col-12 col-sm-2 form-control-label con">Year</label>
        <div class="col-12 col-sm-4">
          <!-- <input type="text" class="form-control" name="year" required/> -->
          <select class="custom-select" name="year">
            <option value="Choose..">Choose...</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
          </select>
        </div>
      </div>
      <div class="row form-group">
        <label for="branch" class="col-12 col-sm-2 form-control-label con">Branch</label>
        <div class="col-12 col-sm-4">
          <input type="text" id="branch" class="form-control" name="branch" required placeholder="Enter Branch"/>
        </div>
      </div>
      <div class="row form-group">
        <label for="section" class="col-12 col-sm-2 form-control-label con">Section</label>
        <div class="col-12 col-sm-4">
          <input type="text" id="section" class="form-control" name="section" required placeholder="Enter in Number"/>
        </div>
      </div>
      <div class="row form-group">
        <label for="rollno" class="col-12 col-sm-2 form-control-label con">RollNo</label>
        <div class="col-12 col-sm-4">
          <input type="text" id="rollno" class="form-control" name="rollno" required placeholder="Enter Rollno"/>
        </div>
      </div>
      <br><br>
      <div class="form-group">
        
          <input type="submit"  value="submit" class="btn btn-primary sbt" />
      
      </div>
    </form>
  </div>
</div>

<div class="container">
  <?php 
    if(isset($_POST['year']))
    {
      $year=$_POST['year'];
      $branch=$_POST['branch'];
      $section=$_POST['section'];
      $rollno=$_POST['rollno'];
      $alldet = $year.$branch.$section;
      $sql = "select ROLLNO,NAME,AWT,PYTHON,UNIX,DC,DAA,ATTEND,CONDUCT,PERCENTAGE from $alldet where ROLLNO='$rollno'";
      $res = mysqli_query($con,$sql)  or die(mysql_error());
      $row = mysqli_num_rows($res);
      if ($row == 1)
      {
        $rows=mysqli_fetch_assoc($res);
        echo '
        <table class="table mb-5">
          <thead class="thead-dark">
            <tr>
              <th scope="col">ROLLNO</th>
              <th scope="col">NAME</th>
              <th scope="col">ATTEND</th>
              <th scope="col">CONDUCT</th>
              <th scope="col">PERCENTAGE</th>
            </tr>
          </thead>
          <tbody> 
           <tr>
            <td>'.($rows['ROLLNO']).'</td>
            <td>'.($rows['NAME']).'</td>
            <td>'.($rows['ATTEND']).'</td>
            <td>'.($rows['CONDUCT']).'</td>
            <td>'.($rows['PERCENTAGE']).'</td>
           </tr>
          </tbody>
          </table>';
      }
      else 
      {
        echo '
        <script type="text/javascript">
        alert("entered wrong rollno");
        window.location.href="student.php";
        </script>';
      }
    }
  ?>
</div>



<footer id="footer">
      <div class="dfoot">
        <p class="foot"> <b>Mail: student@gmail.com</b></p>
        <p class="foot"></i> <b>Contact: +91 909348643</b></p>
        <p class="foot"><b>Created by: Sravani | Geethika | Raja | Charith</b> </p><br>
        <p>@copyright2022</p>

      </div>
</footer>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>