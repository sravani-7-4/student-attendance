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

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     <!-- css link  -->
     <link rel="stylesheet" href="display.css">

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
    <!-- <div class="container-fluid">
        <button class="btn btn-primary"><a href="" class="text-light"> ADD STUDENT </a></button> 
        
    </div> -->


        <!-- navbar -->

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
          <a class="nav-link active" aria-current="page" href="index.php" active>Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="login.php">Login</a>
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


<div class="container dip">

<form method="get" action="done.php" >


                
<div class="container">
    <div class="row">


    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th scope="col">SNO.</th>
          <th scope="col">ROLLNO</th>
          <th scope="col">NAME</th>
          <th scope="col">ATTEND / NOT</th>
        </tr>
      </thead>
      <tbody>

  <?php
        $yr = $_GET['year'];
        $br = $_GET['branch'];
        $sec = $_GET['sec'];
        $sub = $_GET['sub'];
        $hrs = $_GET['hrs'];
        $alldet = $yr.$br.$sec;
        $sql="select * from $alldet where ID!=1";
        $res=mysqli_query($con,$sql);
        if($res){
            while($row=mysqli_fetch_assoc($res))
            {
                $id=$row["ID"];
                $rollno=$row["ROLLNO"];
                $name=$row["NAME"];
                echo 
                '<tr>
                    <th scope="row">'.($id-1).'</th>
                    <td>'.$rollno.'</td>
                    <td>'.$name.'</td>
                     <td>
                     <input type="checkbox" name="b'.($id-1).'" value="'.$id.'" >
                </tr>';
            }

        }
        else{
            die(mysqli_error());
        }
    ?>
  </tbody>
</table>
<?php 
    echo '<div class="d-grid gap-2 d-md-block" >
    <center>
    <input type="submit" class="btn btn-success " value="submit">
    <center>
    </div>';
    
?>


    </form>

    </div>
</div>
      </div>


        <!-- footer  -->

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
    <script src="script.js"></script>
</body>
</html>












<!-- <button id="b'.($id-1).'" class="btn btn-primary"><a target="_self" href="yes.php?sec='.$sec.'&sub='.$sub.'&hrs='.$hrs.'&id='.$id.'" class="text-light" style="text-decoration:none;">YES</a></button> -->
