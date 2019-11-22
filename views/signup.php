<?php
if (isset($_POST['register']))
{
    require_once ('../inc/config.php');
    // $username = $_POST['uid'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $user_cat = 'Student';


    echo $password;
    $role = 2;
    // $role, $firstname, $lastname, $email
    // || empty($lastname) || empty($email) || empty($password) || empty($confirmPassword)
    if (empty($firstname) )
    {
        header("Location:signup.php?error=emptyfields");
        exit();
    }
    else
    {

        $sql = 'INSERT INTO tbl_users (user_role_id, first_name, last_name, email,password, user_cat) VALUES (?,?,?,?,?,?)';
        $stmt = mysqli_stmt_init($conn);

        if (!mysqli_stmt_prepare($stmt, $sql))
        {
            header("Location:signup.php?error=sqlerror");
            exit();

        }
        else
        {

          $md5Password = md5($password);
           // $hashedPwd = password_hash($password, PASSWORD_DEFAULT);

            mysqli_stmt_bind_param($stmt, "isssss", $role, $firstname, $lastname, $email, $md5Password, $user_cat );
       mysqli_stmt_execute($stmt);
       header("Location: signup.php?signup=success");
       exit();
            
             }

        }

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

        <title>UCU Evaluation System Sign Up</title>

        <!-- Custom fonts for this template-->
        <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

        <!-- Custom styles for this template-->
        <link href="../css/sb-admin.css" rel="stylesheet">

    </head>

    <body class="bg-dark">

        <div class="container">
            <div class="card card-register mx-auto mt-5">
                <div class="card-header">Register an Account</div>
                <div class="card-body">
                    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
                        <div class="form-group">
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-label-group">
                                        <input type="text" id="firstName" name="firstname" class="form-control" placeholder="First name" required="required" autofocus="autofocus">
                                        <label for="firstName">First name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-label-group">
                                        <input type="text" id="lastName" name="lastname" class="form-control" placeholder="Last name" required="required">
                                        <label for="lastName">Last name</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-label-group">
                                <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" required="required">
                                <label for="inputEmail">Email address</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-label-group">
                                        <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required="required">
                                        <label for="inputPassword">Password</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-label-group">
                                        <input type="password" id="confirmPassword" name="confirmPassword" class="form-control" placeholder="Confirm password" required="required">
                                        <label for="confirmPassword">Confirm password</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <a class="btn btn-primary btn-block" href="login.html">Register</a> -->
                        <button class="btn btn-primary btn-block" type="submit" name="register">Register</button>
                        <?php
 

          ?>

                    </form>
                    <div class="text-center">
                        <a class="d-block small mt-3" href="login.php">Login Page</a>
                        <a class="d-block small" href="../forgot-password.html">Forgot Password?</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bootstrap core JavaScript-->
        <script src="../vendor/jquery/jquery.min.js"></script>
        <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

    </body>

    </html>