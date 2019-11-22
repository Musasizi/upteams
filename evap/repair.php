<?php
if (isset($_POST['register']))
{
    require_once ('inc/config.php');
    // $username = $_POST['uid'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $role = 2;
    // $role, $firstname, $lastname, $email
    if (empty($firstname) || empty($lastname) || empty($email) || empty($password) || empty($confirmPassword))
    {
        header("Location:signup.php?error=emptyfields");

    }
    else
    {

        $sql = 'INSERT INTO tbl_users (user_role_id, first_name, last_name, email,password) VALUES (?,?,?,?,?)';
        $stmt = mysqli_stmt_init($conn);

        if (!mysqli_stmt_prepare($stmt, $sql))
        {
            header("Location:signup.php?error=sqlerror");
            exit();

        }
        else
        {
            $hashedPwd = password_hash($password, PASSWORD_DEFAULT);

            mysqli_stmt_bind_param($stmt, "issss", $role, $firstname, $lastname, $email, $hashedPwd);
        }

    }

}



// User	Password
// john_doe@example.com	admin123
// ahsan@example.com	ahsan123
// sarah@example.com	sarah123
// salman@example.com	salman123

?>
