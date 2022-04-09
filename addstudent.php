<!-- <?php
session_start();
if(!isset($_SESSION['login']) || !$_SESSION['login']==1){
    header('Location:login.php');
  }
?> -->
<html>
    <head>
        <title>

        </title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">

    </head>
    <body>
    <nav style="background:#404040;  " class="home nav nav-pills flex-column flex-sm-row">
        <a   class="nav-text flex-sm-fill text-sm-center nav-link" href="addcourse.php"><h4>Add course</h4></a>
        <a class="nav-text flex-sm-fill text-sm-center nav-link" href="addstudent.php"><h4>Add Student</h4></a>
        <a class="nav-text flex-sm-fill text-sm-center nav-link" href="addresult.php"><h4>Add result</h4></a>
        <a class="nav-text flex-sm-fill text-sm-center nav-link" href="addsubject.php"><h4>Add subject</h4></a>
        <a class="nav-text flex-sm-fill text-sm-center nav-link" href="db/logout.php"><h4>logout</h4></a>
    </nav>

        <br><br><br>
        <form action="db/addstudent.php" method="post">
            
        <div style= "margin-left:30%; margin-top:140px" class = "col-md-6 student-left">

            <div class="row mb-3">
            <label for="input-text" style="color:black; font-weight:bold; font-size:20px;" class="col-sm-6 col-form-label">Enter the Name of the Course </label>
            <div class="col-sm-6">
            <input type="text"  name="course" class="form-control" id="inputEmail3">
            </div>
        </div><br>
        <div class="row mb-3">
            <label for="input-text"style="color:black; font-weight:bold; font-size:20px;" class="col-sm-6 col-form-label">Enter the Name of the students </label>
            <div class="col-sm-6">
            <input type="text" name="name"  class="form-control" id="inputEmail3">
            </div>
        </div><br>

        <div class="row mb-3">
            <label for="input-text"style="color:; font-weight:bold; font-size:20px;" class="col-sm-6 col-form-label">Enter the roll number </label>
            <div class="col-sm-6">
            <input type="text" name="roll" class="form-control" id="inputEmail3">
            </div>
        </div>
        



            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
        </div>

        <?php include('include/message.php'); ?>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>