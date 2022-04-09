 <!-- <?php
session_start();
if(!isset($_SESSION['login']) || !$_SESSION['login']==1){
    header('Location:login.php');
  } 
?> -->
<?php
  include('db/connect.php');
  if(isset($_POST['submit'])){
      $coursename = $_POST['course'];
      $query = "SELECT * FROM course WHERE courseName = '$coursename'";
      $result = mysqli_query($conn, $query);
      $data = mysqli_fetch_assoc($result);
      $courseid = $data['id'];
      $subjectquery = "SELECT * FROM subject WHERE course_id = '$courseid'";
      $subjectresult = mysqli_query($conn, $subjectquery);

    }
?>
<html>
    <head>
        <title>

        </title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">

    </head>
    <body>
    <<!-- nav bar -->
    <nav style="background:#404040; margin-top:-22px " class="home nav nav-pills flex-column flex-sm-row">
        <a   class="nav-text flex-sm-fill text-sm-center nav-link" href="addcourse.php"><h4>Add course</h4></a>
        <a class="nav-text flex-sm-fill text-sm-center nav-link" href="addstudent.php"><h4>Add Student</h4></a>
        <a class="nav-text flex-sm-fill text-sm-center nav-link" href="addresult.php"><h4>Add result</h4></a>
        <a class="nav-text flex-sm-fill text-sm-center nav-link" href="addsubject.php"><h4>Add subject</h4></a>
        <a class="nav-text flex-sm-fill text-sm-center nav-link" href="db/logout.php"><h4>logout</h4></a>


    </nav>

        <br><br><br>
        <form action="db/addresult.php" method="post">
        <div style= "margin-left:30%; margin-top:90px" class = "col-md-6 student-left">
            <div class="row mb-3">
            <label for="input-text" style="color:black; font-weight:bold; font-size:20px;" class="col-sm-6 col-form-label">Enter the Name of the students </label>
            <div class="col-sm-6">
            <input type="text" name="name"  class="form-control" id="inputEmail3">
            </div>
        </div><br>
            
            <div class="row mb-3">
            <label for="input-text" style="color:black; font-weight:bold; font-size:20px;" class="col-sm-6 col-form-label">Enter the Roll number </label>
            <div class="col-sm-6">
            <input type="text"  name="roll" class="form-control" id="inputEmail3">
            </div>
        </div><br>
                <div class="row mb-3">
            <label for="input-text" style="color:black; font-weight:bold; font-size:20px;" class="col-sm-6 col-form-label">Enter the Name of the subjects </label>
            <div class="col-sm-6">
                <select name="subject" id="cars">
                    <?php while($row = mysqli_fetch_assoc($subjectresult)){ ?>
                    <option value="<?php echo $row['subjectName']; ?>"><?php echo $row['subjectName']; ?></option>
                    <?php } ?>
                            
                </select>
                    </div>
                    </div>

            
            <div class="row mb-3">
            <label for="input-text"  style="color:black; font-weight:bold; font-size:20px;" class="col-sm-6 col-form-label">Enter the Marks </label>
            <div class="col-sm-6">
            <input type="text"  name="mark" class="form-control" id="inputEmail3">
            </div>
        </div>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </div>
        </form>
        <?php include('include/message.php'); ?>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>