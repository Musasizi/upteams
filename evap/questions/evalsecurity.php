<?php
session_start();

if(!isset($_SESSION['id'],$_SESSION['user_role_id']))
{

   
    header('location:../views/login.php?lmsg=true');
    exit;
}	

require_once('../inc/config.php');
require_once('../layoutT/header.php'); 
require_once('../layoutT/sidebar.php'); 

if(isset($_POST['security']))
{

 extract($_REQUEST);
// print_r ($p);
// echo "I am trying to work";
// echo $_REQUEST;
$req = $_POST['q1'];

// echo $_POST['q1'];


 $userId = $_SESSION['id'];
 $catName = "security";


// echo '<h2>What gets you the most excited?</h2>';





// $sql = "INSERT INTO mytable (first_name, last_name, age)  
//           VALUES('raj', 'sharma', '15'), 
//     ('kapil', 'verma', '42'), 
//     ('monty', 'singh', '29'), 
//     ('arjun', 'patel', '32') "; 

$sql = "INSERT INTO answers (qtn_id, ans_text, user_id, category_name) 
VALUES ('q1', '$q1', '$userId', '$catName'),('q2', '$q2', '$userId', '$catName'),
('q3', '$q3', '$userId', '$catName'),('q4', '$q4', '$userId', '$catName'),('q5', '$q5', '$userId', '$catName')";


// $sql = "INSERT INTO answers (qtn_id, ans_text, user_id, category_name) VALUES ('q1', '$q1', '$userId', '$catName');";
// $sql = "INSERT INTO answers (qtn_id, ans_text, user_id, category_name) VALUES ('q2', '$q2', '$userId', '$catName');";
// $sql = "INSERT INTO answers (qtn_id, ans_text, user_id, category_name) VALUES ('q3', '$q3', '$userId', '$catName');";
// $sql = "INSERT INTO answers (qtn_id, ans_text, user_id, category_name) VALUES ('q4', '$q4', '$userId', '$catName');";
// $sql = "INSERT INTO answers (qtn_id, ans_text, user_id, category_name) VALUES ('q5', '$q5', '$userId', '$catName');";


if ($conn->multi_query($sql) === TRUE) {
    // echo "New records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
// $sql = "INSERT INTO MyGuests (firstname, lastname, email)
// VALUES ('John', 'Doe', 'john@example.com');";
// $sql .= "INSERT INTO MyGuests (firstname, lastname, email)
// VALUES ('Mary', 'Moe', 'mary@example.com');";
// $sql .= "INSERT INTO MyGuests (firstname, lastname, email)
// VALUES ('Julie', 'Dooley', 'julie@example.com')";

// if ($conn->multi_query($sql) === TRUE) {
//     echo "New records created successfully";
// } else {
//     echo "Error: " . $sql . "<br>" . $conn->error;
// }

// $conn->close();














// $sql = 'INSERT INTO tbl_users (user_role_id, first_name, last_name, email,password) VALUES (?,?,?,?,?)';
// $stmt = mysqli_stmt_init($conn);

// if (!mysqli_stmt_prepare($stmt, $sql))
// {
//     header("Location:signup.php?error=sqlerror");
//     exit();

// }
// else
// {

//   $md5Password = md5($password);
//    // $hashedPwd = password_hash($password, PASSWORD_DEFAULT);

//     mysqli_stmt_bind_param($stmt, "issss", $role, $firstname, $lastname, $email, $md5Password);
// mysqli_stmt_execute($stmt);
// header("Location: signup.php?signup=success");
// exit();
    
//      }









//What gets you the most excited?
// echo $_POST;

// echo $req;
// print $_POST;
// print $req;
// print $_POST['qtn'];





?>




    <?php
// echo "<h2>$q1</h2>";

$taken = 'checked';



// if ($q1 == 'c1') {echo $taken;}  




?>





    <?php

// $questions = array("What gets you the most excited?", " Experimenting, discovering, and learning", "Helping others",
//  "Music, movies, games, and making others laugh", "Taking risks");


//  foreach($questions as $question){
//      echo "'<label><input type='radio' name='q1' value='c1'  disabled' .if ($q1 == 'c1') {echo $taken;} >
//     $question.'</label><br />'";

//     // echo '<label><input type="radio" name="q1" value="c1"  disabled'. (if ($q1 == 'c1') {echo $taken;}). '>'  .$question. '</label><br /> ';


//  }



//  echo '<option value="'.$value.'" '.(($value=='United States')?'selected="selected"':"").'>'.$value.'</option>';

 //echo '<option value="'.$value.'" '.(($value=='United States')?'selected="selected"':"").'>'.$value.'</option>';


?>


<div id="content-wrapper">

<div class="container-fluid">

    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="index.html">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Security Answers</li>
    </ol>

    <!-- Page Content -->
    <!-- <h1>Blank Page</h1>
    <hr>
    <p>This is a great starting point for new custom pages.</p> -->

</div>
<!-- /.container-fluid -->

<div id="wrapper">
    <!-- <h1>Evaluation system for UCU</h1> -->


       <!-- Question 1 -->
       <form id="quiz" >
 <h2><strong>Security Answers </strong></h2>
        <h2>How do you find Security at UCU?</h2>
        <!-- Here are the choices for the first question. Each input tag must have the same name. For this question, the name is q1. -->
        <!-- The value is which answer the choice corresponds to. -->
        <label><input type="radio" name="q1" value="c1" disabled <?php if ($q1 == 'c1') {echo $taken;}  ?>  /> Very tight </label><br />
        <label><input type="radio" name="q1" value="c2" disabled <?php if ($q1 == 'c2') {echo $taken;}  ?> /> Tight </label><br />
        <label><input type="radio" name="q1" value="c3" disabled <?php if ($q1 == 'c3') {echo $taken;}  ?> /> Fair </label><br />

        <!-- Question 2 -->
        <h2>Do you feel secure at UCU?</h2>
        <!-- Here are the choices for the second question. Notice how each input tag has the same name (q2), but a different name than the previous question. -->
        <label><input type="radio" name="q2" value="c1" disabled <?php if ($q1 == 'c1') {echo $taken;}  ?> /> Yes </label><br />
        <label><input type="radio" name="q2" value="c2" disabled <?php if ($q1 == 'c2') {echo $taken;}  ?> /> No </label><br />
        <label><input type="radio" name="q2" value="c3" disabled <?php if ($q1 == 'c3') {echo $taken;}  ?> /> Not sure </label><br />

        <!-- Question 3 -->
        <h2>Are you satsified with the security guards?</h2>
        <!-- Choices for the third question -->
        <label><input type="radio" name="q3" value="c1" disabled <?php if ($q3 == 'c1') {echo $taken;}  ?>  /> Yes </label><br />
        <label><input type="radio" name="q3" value="c2" disabled <?php if ($q3 == 'c2') {echo $taken;}  ?> /> No </label><br />
        <label><input type="radio" name="q3" value="c3" disabled <?php if ($q3 == 'c3') {echo $taken;}  ?> /> Not sure </label><br />

        <h2>Would you recommend security improvements ?</h2>
        <!-- Here are the choices for the first question. Each input tag must have the same name. For this question, the name is q1. -->
        <!-- The value is which answer the choice corresponds to. -->
        <label><input type="radio" name="q4" value="c1" disabled <?php if ($q4 == 'c1') {echo $taken;}  ?> /> Yes </label><br />
        <label><input type="radio" name="q4" value="c2" disabled <?php if ($q4 == 'c2') {echo $taken;}  ?> /> No </label><br />
        <label><input type="radio" name="q4" value="c3" disabled <?php if ($q4 == 'c3') {echo $taken;}  ?> /> I dont know </label ><br />

         <h2>Rate UCU security</h2>
        <!-- Here are the choices for the first question. Each input tag must have the same name. For this question, the name is q1. -->
        <!-- The value is which answer the choice corresponds to. -->
        <label><input type="radio" name="q5" value="c1" disabled <?php if ($q5 == 'c1') {echo $taken;}  ?> /> 100% </label><br />
        <label><input type="radio" name="q5" value="c2" disabled <?php if ($q5 == 'c2') {echo $taken;}  ?> /> 80% </label><br />
        <label><input type="radio" name="q5" value="c3" disabled <?php if ($q5 == 'c3') {echo $taken;}  ?> /> 60% </label><br />



</form>

 
        </div>


<?php }
require_once('../layoutT/footer.php'); 

?>