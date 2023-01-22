
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Get longlasting virtual number for all social media">
  <meta name="keywords" content="virtual numbers, textverified, eposms">
    <link rel="stylesheet" href="./login.css">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="bootstrap-4.6.1-dist/css/bootstrap.min.css">

    <link rel = "icon" type = "image/jpeg" href = "/images/eposms.jpeg">
    <title>Login - EPOSMS</title>


    <style>
        @media screen and (max-width:800px) {
         .nav-item{
          padding-left: 0px;
         }
        }
     
       </style>
</head>
<body>

      <?php require_once(__DIR__.'/logsinnav.php'); ?>
      <br>
      <div class="us11">
      <h4 class="text-center">Login To Your Account</h4>
      <hr>
    </div>
      <?php
    require('db.php');
    session_start();
    // When form submitted, check and create user session.
    if (isset($_POST['email'])) {
        $email = stripslashes($_REQUEST['email']);    // removes backslashes
        $email = mysqli_real_escape_string($con, $email);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        // Check user is exist in the database
        $query    = "SELECT * FROM `users` WHERE email='$email'
                     AND password='" . md5($password) . "'";
        $result = mysqli_query($con, $query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $_SESSION['email'] = $email;
            // Redirect to user dashboard page
            header("Location: textsms.php");
        } else {
            echo "<div class='form'>
                  <h3>Incorrect Username/password.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a> again.</p>
                  </div>";
        }
    } else {
?>

    <form method="post" name="login" class="us7">
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Email address</label>
          <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
          <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password" name="password" class="form-control" id="exampleInputPassword1" required>
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
      <?php
    }
?>
    <?php require_once(__DIR__.'/footer.php'); ?>
      
      

      <script src="bootstrap-4.6.1-dist/js/jquery"></script>
      <script src="bootstrap-4.6.1-dist/js/bootstrap.min.js"></script>  
</body>
</html>