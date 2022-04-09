<html>
    <head>
        <title>

        </title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body>
        
  <!-- nav bar -->
  <nav  style="background:#404040"  class=" nav nav-pills flex-column flex-sm-row">
        <a style="color:white; font-size:30px;"   class="nav-text flex-sm-fill text-sm-center nav-link" href="home.php">Home</a>
        <a style="color:white; font-size:30px;" class="nav-text flex-sm-fill text-sm-center nav-link" href="login.php">Admin</a>
        <a style="color:white; font-size:30px;" class="nav-text flex-sm-fill text-sm-center nav-link" href="result.php">Result</a>
        <a style="color:white; font-size:30px;" class="nav-text flex-sm-fill text-sm-center nav-link" href="course.php">Course</a>
    </nav>
        <?php include('db/connect.php');
        $query = "SELECT * FROM course";
        $result = mysqli_query($conn, $query);
        $num = 0; ?> 
        <table style="margin-left:12%; margin-top:30px" class="table">
            <thead >
                <tr>
                <th scope="col">S.No</th>
                <th scope="col">Course Name</th>
                </tr>
            </thead>
            <tbody>
                <?php while($row = mysqli_fetch_assoc($result)){ $num=$num+1; ?>
                <tr>
                <th><?php echo $num; ?></th>
                <td><?php echo $row['CourseName']; ?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>