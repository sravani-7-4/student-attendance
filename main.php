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
            <form method="get" action="display.php">   

                <div class="row form-group">
                    <label for="year" class="col-12 col-sm-2 form-control-label con">Year</label>
                    <div class="col-12 col-sm-4">
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
                    <label for="branch" class="col-12 col-sm-2 form-control-label con ">Branch</label>
                    <div class="col-12 col-sm-4">
                    <input type="text" id="branch" class="form-control" name="branch" placeholder="Enter Branch" required/>
                    </div>
                </div>
                <div class="row form-group">
                    <label for="sec" class="col-12 col-sm-2 form-control-label con ">Section</label>
                    <div class="col-12 col-sm-4">
                    <input type="text" id="section" class="form-control" name="sec" placeholder="Enter in number" required/>
                    </div>
                </div>
                <div class="row form-group">
                    <label for="sub" class="col-12 col-sm-2 form-control-label con ">Subject</label>
                    <div class="col-12 col-sm-4">
                    <input type="text" id="rollno" class="form-control" name="sub" placeholder="Enter Subject" required/>
                    </div>
                </div>
                <div class="row form-group">
                    <label for="sub" class="col-12 col-sm-2 form-control-label con">Hour</label>
                    <div class="col-12 col-sm-4">
                    <select class="custom-select" name="hrs">
                        <option value="Choose..">Choose...</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                    </select>
                    </div>
                </div>
                <br><br>
                <div class="form-group">
                    
                       <input type="submit"  value="submit" class="btn btn-primary sbt" />
                    
                </div>
            </form>
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
  
  </body>
</html>