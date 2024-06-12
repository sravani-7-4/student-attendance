<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Attendance Portal</title>
    <!-- css -->
    <link rel="stylesheet" href="style.css">
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


    <!-- home page -->
    <div class="container">
      <div class="row">
        <div class="con col-md-6">
          <h1>Attendance Counts!!</h1>
          <h1>Every Day, All Day</h1><br />
          <p class="intro">The <span><b>student attendance management system</b></span> is an automated system that gets roll no according to the data given by the student. The main requirement of the application is to provide the details of student roll no, period details about attendance. Then the application generates the attendance report of students.</p>

        </div>
        <div class="col-md-6">
          <img src="https://i.ytimg.com/vi/CL4qjI_XKbY/maxresdefault.jpg" alt="student attendance">
        </div>
      </div>
    </div>
  <!-- Explore -->
    <div class="explore">
      <h1 class="exp">Explore..!</h1>

      <div class="explore-row">
        <img class="adm" src="https://cdn-icons-png.flaticon.com/512/6612/6612108.png" alt="Administrator">
        <h3>Mark The Attendance</h3>
        <p class="demo">This provides a comprehensive overview of all aspects of the attendance system and the key responsibilities of an administrator handling attendance and workforce management.</p>
        <div class="bt d-grid gap-2 col-4 mx-auto">
          <button type="button" class="btn btn-dark" ><a href="login.php" class="text-light" style="text-decoration:none">Administrator</a></button>
        </div>
      </div>

      <div class="explore-row">
        <img class="stud" src="https://cdn-icons-png.flaticon.com/512/3125/3125856.png" alt="student">
        <h3>Check The Attendance</h3>
        <p class="demo">Similarly, the students have module like checking their attendance. Here students can only see this data and cannot make any changes to the data that is shown. </p>
        <div class="bt d-grid gap-2 col-4 mx-auto">
          <button type="button" class="btn btn-dark"><a href="student.php" class="text-light" style="text-decoration:none">Student</a></button>
        </div>
      </div>

    </div>
    <!-- footer -->

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
