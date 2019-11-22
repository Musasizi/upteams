<?php

session_start();

if(!isset($_SESSION['id'],$_SESSION['user_role_id']))
{

   
    header('location:../views/login.php?lmsg=true');
    exit;
}	

require_once('../inc/config.php');
require_once('../layoutAdmin/header.php'); 
require_once('../layoutAdmin/sidebar.php'); 
$customerID = 1;
$taken = 'checked';
$categoryName = 'security';

$sql="SELECT * FROM answers WHERE category_name = '$categoryName'";

$sql2="SELECT * FROM tbl_users";






            function getUser($id, $conn ) {


        $query = mysqli_query($conn, "SELECT * FROM tbl_users")
                or die (mysqli_error($conn));
             
             while ($DBNames = mysqli_fetch_array($query)) {
              
                //             print_r ($DBNames['id']);
                //      echo '</br>';
                //      print_r ($DBNames['first_name']);
                //      echo '</br>';
                     if ($id ==  $DBNames['id']){

                       return "Reply from username: " . $DBNames['first_name']. ' '. $DBNames['last_name']. ' of  category '.  $DBNames['user_cat'];
                     break;
                     }
// continue;
        //        break;
                     }
             

               
            }






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
        <form id="quiz">

            <?php




$ansSet = array();
if ($result=mysqli_query($conn,$sql)){
        $taken = 'checked';
  while ($row=mysqli_fetch_row($result)){
        
?>



            <!-- Question 1 -->



            <?php  if ($row[1] == "q1") {  
                                
                                        // print_r($row[3]);
                                        $userNameDisplay = getUser($row[3], $conn);
                                       
                                
                                        ?>



            <!-- Page Content -->
            <!-- <h1>Blank Page</h1>
                        <hr>
                        <p>This is a great starting point for new custom pages.</p> -->


            <!-- /.container-fluid -->


            <h2> <strong> <?php echo $userNameDisplay?> </strong> </h2>
            <h2>How do you find Security at UCU</h2>
            <!-- Here are the choices for the first question. Each input tag must have the same name. For this question, the name is q1. -->
            <!-- The value is which answer the choice corresponds to. -->

            <?php  if ($row[1] == "q1") { ?> <label><input type="radio" name="q1" value="c1" disabled <?php if ($row[1] == "q1" && $row[2] == "c1" ) {echo $taken; ;
        
        }?> /> Yes
            </label><br /> <?php  } ?>

            <?php  if ($row[1] == "q1") { ?> <label><input type="radio" name="q1" value="c2" disabled
                    <?php if ($row[1] == "q1" && $row[2] == "c2" ) {echo $taken;}?> /> No </label><br />
            <?php  } ?>

            <?php  if ($row[1] == "q1") { ?> <label><input type="radio" name="q1" value="c3" disabled
                    <?php if ($row[1] == "q1" && $row[2] == "c3" ) {echo $taken;}?> /> Not sure </label><br />
            <?php  } ?>



            <?php } elseif($row[1] == "q2"){?> <h2>Do you feel secure at UCU?</h2>

            <?php  if ($row[1] == "q2") { ?> <label><input type="radio" name="q2" value="c1" disabled
                    <?php if ($row[1] == "q2" && $row[2] == "c1" ) {echo $taken;}?> /> Yes
            </label><br /> <?php  } ?>

            <?php  if ($row[1] == "q2") { ?> <label><input type="radio" name="q2" value="c2" disabled
                    <?php if ($row[1] == "q2" && $row[2] == "c2" ) {echo $taken;}?> /> No </label><br />
            <?php  } ?>

            <?php  if ($row[1] == "q2") { ?> <label><input type="radio" name="q2" value="c3" disabled
                    <?php if ($row[1] == "q2" && $row[2] == "c3" ) {echo $taken;}?> /> Not sure </label><br />
            <?php  } ?>


            <?php } elseif($row[1] == "q3"){?> <h2>Are you satsified with the security guards?</h2>


            <?php  if ($row[1] == "q3") { ?> <label><input type="radio" name="q3" value="c1" disabled
                    <?php if ($row[1] == "q3" && $row[2] == "c1" ) {echo $taken;}?> /> Yes
            </label><br /> <?php  } ?>

            <?php  if ($row[1] == "q3") { ?> <label><input type="radio" name="q3" value="c2" disabled
                    <?php if ($row[1] == "q3" && $row[2] == "c2" ) {echo $taken;}?> /> No </label><br />
            <?php  } ?>

            <?php  if ($row[1] == "q3") { ?> <label><input type="radio" name="q3" value="c3" disabled
                    <?php if ($row[1] == "q3" && $row[2] == "c3" ) {echo $taken;}?> /> Not certain </label><br />
            <?php  } ?>


            <?php } elseif($row[1] == "q3"){?> <h2>Would you recommend security improvements ?</h2>


            <?php  if ($row[1] == "q3") { ?> <label><input type="radio" name="q3" value="c1" disabled
                    <?php if ($row[1] == "q3" && $row[2] == "c1" ) {echo $taken;}?> /> Yes
            </label><br /> <?php  } ?>

            <?php  if ($row[1] == "q3") { ?> <label><input type="radio" name="q3" value="c2" disabled
                    <?php if ($row[1] == "q3" && $row[2] == "c2" ) {echo $taken;}?> /> No </label><br />
            <?php  } ?>

            <?php  if ($row[1] == "q3") { ?> <label><input type="radio" name="q3" value="c3" disabled
                    <?php if ($row[1] == "q3" && $row[2] == "c3" ) {echo $taken;}?> /> I don't know </label><br />
            <?php  } ?>


            <?php } elseif($row[1] == "q4"){?> <h2>Rate UCU security</h2>


            <?php  if ($row[1] == "q4") { ?> <label><input type="radio" name="q4" value="c1" disabled
                    <?php if ($row[1] == "q4" && $row[2] == "c1" ) {echo $taken;}?> /> 100%
            </label><br /> <?php  } ?>

            <?php  if ($row[1] == "q4") { ?> <label><input type="radio" name="q4" value="c2" disabled
                    <?php if ($row[1] == "q4" && $row[2] == "c2" ) {echo $taken;}?> /> 80% </label><br />
            <?php  } ?>

            <?php  if ($row[1] == "q4") { ?> <label><input type="radio" name="q4" value="c3" disabled
                    <?php if ($row[1] == "q4" && $row[2] == "c3" ) {echo $taken;}?> /> Below 50% </label><br />
            <?php  } ?>

            <?php } ?>

            <?php 
  }
  // Free result set
  mysqli_free_result($result);
}
  mysqli_close($conn);
  ?>



        </form>


    </div>


    <?php require_once('../layoutAdmin/footer.php'); ?>