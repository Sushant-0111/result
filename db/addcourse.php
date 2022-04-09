<?php
  include('connect.php');
  if(isset($_POST['submit'])){
      $coursename = $_POST['name'];

      if($coursename==''){
          $msg = "fill the required field";
          header('Location:../login.php?errmsg='+$msg);
      } 
      $select = "SELECT * FROM course WHERE CourseName = '$coursename'";
      $selectresult = mysqli_query($conn, $select);
      $row = mysqli_num_rows($selectresult);
      if($row==1){
        $msg = 'course already exist';
        header("Location:../addcourse.php?msg=".$msg);
      }
      else{
    $query = "INSERT INTO course(CourseName) VALUES('$coursename')";
    $result = mysqli_query($conn,$query);
    if($result){
        $msg='inserted successfully';
        header("Location:../addcourse.php?msg=".$msg);
    }else{
        $msg = 'Cannot insert';
        header('Location:../addcourse.php?errmsg='.$msg);
    }
  }


  }

?>