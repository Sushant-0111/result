<html>
    <head>
        <title>

        </title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
         <link rel="stylesheet" href="css/style2.css">
    </head>
    <body>

    <!-- nav bar -->
    <nav  style="background:#404040"  class=" nav nav-pills flex-column flex-sm-row">
        <a style="color:white; font-size:30px;"   class="nav-text flex-sm-fill text-sm-center nav-link" href="home.php">Home</a>
        <a style="color:white; font-size:30px;" class="nav-text flex-sm-fill text-sm-center nav-link" href="login.php">Admin</a>
        <a style="color:white; font-size:30px;"class="nav-text flex-sm-fill text-sm-center nav-link" href="result.php">Result</a>
        <a style="color:white; font-size:30px;" class="nav-text flex-sm-fill text-sm-center nav-link" href="course.php">Course</a>
    </nav>

        <div class="result">
        <?php include('db/connect.php'); 
        if(isset($_POST['submit'])){
            $username = $_POST['name'];
            $roll = $_POST['roll'];
      
            if($username==''){
                $msg = "username is required";
                header('Location:../login.php?errmsg='+$msg);
            }
            if($roll==''){
                $msg = "roll is required";
                header('Location:../login.php?errmsg='+$msg);
            }  
          $query = "SELECT * FROM student WHERE studentName = '$username' AND Roll = '$roll'";
          $result = mysqli_query($conn,$query);
            $id = mysqli_fetch_assoc($result)['id'];

          $row = mysqli_num_rows($result);
          
              $resultquery = "SELECT * FROM subresult WHERE student_id = '$id'";
              $resultt = mysqli_query($conn, $resultquery); $num=0; $total = 0;?>
              <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title"><?php echo 'Name : '.$username; ?></h5>
                    <h6 class="card-subtitle mb-2 text-muted"><?php echo 'Roll No : '.$roll; ?></h6>
                </div>
               </div>
                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">S.no</th>
                            <th scope="col">Subject</th>
                            <th scope="col">Marks</th>
                            </tr>
                        </thead>
                        <tbody><?php while($row = mysqli_fetch_assoc($resultt)){ $num = $num+1;?>
                            <tr>
                            <th><?php echo $num; ?></th>
                            <td><?php echo $row['subjectName']; ?></td>
                            <td><?php echo $row['mark']; ?></td>
                            </tr>
                            <?php $total = $total +$row['mark'];  } $percentage = ($total/500)*100; ?>
                            <tr>
                            <td></td>
                            <td>Total</td>
                            <td><?php echo $total; ?></td>
                            </tr>
                            <tr>
                            <td></td>
                            <td>Percentage</td>
                            <td><?php echo $percentage.'%'; ?></td>
                            </tr>
                        </tbody>
                    </table>
              <?php  
          
      
      
        }
        ?>
        </div>

    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>
