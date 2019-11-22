<?php 
session_start();

require_once('../inc/config.php');

if(isset($_POST['login']))
{
	if(!empty($_POST['email']) && !empty($_POST['password']))
	{
		$email 		= trim($_POST['email']);
        $password 	= trim($_POST['password']);
        
        
		
		$md5Password = md5($password);
		
		$sql = "select * from tbl_users where email = '".$email."' and password = '".$md5Password."'";
		$rs = mysqli_query($conn,$sql);
		$getNumRows = mysqli_num_rows($rs);
		
		if($getNumRows == 1)
		{
			$getUserRow = mysqli_fetch_assoc($rs);
			unset($getUserRow['password']);
			
            $_SESSION = $getUserRow;
            
            // print_r ($getUserRow);

            if($getUserRow['user_role_id'] == 1){
                // echo "You are admin";
                header('location:../app/admin.php');
        
            } else if($getUserRow['user_role_id'] == 2){
                // echo "You are a user";
                   header('location:../app/index.php');
            } else{
                echo "Role not set!";
            }
            //Array ( [id] => 1 [user_role_id] => 1 [first_name] => John [last_name] => Doe [email] => john_doe@example.com ) 
           // header('location:dashboard.php');
            // header('location:dashboard.php');
            // header('location:trial.php');
			exit;
		}
		else
		{
			$errorMsg = "Wrong email or password";
		}
	}
}

if(isset($_GET['logout']) && $_GET['logout'] == true)
{
	session_destroy();
	header("location:login.php");
	exit;
}


if(isset($_GET['lmsg']) && $_GET['lmsg'] == true)
{
	$errorMsg = "Login required to access dashboard";
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>UCU Evaluation System Login</title>
    <!-- Bootstrap core CSS-->

 <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->


    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">



    <!-- Custom styles for this template-->


    <link href="../css/sb-admin.css" rel="stylesheet">
</head>

<body class="bg-dark">
    <div class="container">
        <div class="card card-login mx-auto mt-5">
            <div class="card-header">Login</div>
            <div class="card-body">
                <?php 
			if(isset($errorMsg))
			{
				echo '<div class="alert alert-danger">';
				echo $errorMsg;
				echo '</div>';
				unset($errorMsg);
			}
		?>
                <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
                    <div class="form-group">
                       <h2> UCU Evaluation System </h2>
                    
                        <label for="exampleInputEmail1">Email address</label>
                        <input class="form-control" id="exampleInputEmail1" name="email" type="email" placeholder="Enter email" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input class="form-control" id="exampleInputPassword1" name="password" type="password" placeholder="Password" required>
                    </div>
                    <button class="btn btn-primary btn-block" type="submit" name="login">Login</button>
                </form>
                <div class="text-center">
                    <a class="d-block small mt-3" href="signup.php">Register an Account</a>
                    <a class="d-block small" href="../forgot-password.html">Forgot Password?</a>
                </div>

                <!-- </div>
      <button class="btn btn-primary btn-block" type="button" name="register">Register</button>
    </div> -->
            </div>
            <!-- Bootstrap core JavaScript-->
            <script src="../vendor/jquery/jquery.min.js"></script>

            <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
            <!-- Core plugin JavaScript-->
            <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>
</body>

</html>