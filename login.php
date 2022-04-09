 <?php
    include('db/connect.php');
?> 

<html>
    <head>
        <title>

        </title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
    <nav class="login-nav nav nav-pills flex-column flex-sm-row">
        <a class="nav-text flex-sm-fill text-sm-center nav-link" href="home.php"  >Home</a>
        <a class="nav-text flex-sm-fill text-sm-center nav-link" href="login.php">Result</a>
    </nav><hr><hr>
    <div class = "container">
          <div class="login-box">
          <div class="row">
          <!-- ADMIN -->
                <div class = "col-md-6 admin-right">
                <form method = "POST" action = "db/login.php">
        <div class="for_admin">
            <h1>Admin</h1>
        </div>
        <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Username</label>
            <div class="col-sm-6">
            <input type="text" name="username" class="form-control" id="inputEmail3">
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-6">
            <input type="password" name="password" class="form-control" id="inputPassword3">
            </div>
        </div>
        
        <button type="submit" name="loginsubmit" class="btn btn-primary">Sign in</button>
    </form> 
</div>
            <!--  STUDENT PART -->

      <div class = "col-md-6 student-left">
      <form method = "POST" action = "result.php">
        <div class="for_admin">
            <h1>Student</h1>
        </div>
        <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-3 col-form-label">Enter the name</label>
            <div class="col-sm-6">
            <input type="text" name="name" class="form-control" id="inputEmail3">
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputPassword3" class="col-sm-3 col-form-label">Roll No</label>
            <div class="col-sm-6">
            <input type="text" name="roll" class="form-control" id="inputPassword3">
            </div>
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </div>
        </div>
        </div>
</div>
</div>
    </div>
    
    
    
</div>
    </form>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>