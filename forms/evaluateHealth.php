


<?php 


require_once('../inc/config.php');
require_once('../layoutT/header.php'); 
require_once('../layoutT/sidebar.php'); 

?>
    





        <div id="content-wrapper">

            <div class="container-fluid">

                <!-- Breadcrumbs-->
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="index.html">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item active">Health</li>
                </ol>

                <!-- Page Content -->
                <!-- <h1>Blank Page</h1>
                <hr>
                <p>This is a great starting point for new custom pages.</p> -->

            </div>
            <!-- /.container-fluid -->

            <div id="wrapper">
                <!-- <h1>Evaluation system for UCU</h1> -->

                <form id="quiz" action="../questions/evalhealth.php" method="POST">
                    <!-- Question 1 -->
                    <h2>Health</h2>
                    <h2>Have you ever gone for medication at allan Galphin in UCU?</h2>
                    <!-- Here are the choices for the first question. Each input tag must have the same name. For this question, the name is q1. -->
                    <!-- The value is which answer the choice corresponds to. -->
                    <label><input type="radio" name="q1" value="c1" /> Yes </label><br />
                    <label><input type="radio" name="q1" value="c2" /> No </label><br />
                    <label><input type="radio" name="q1" value="c3" /> Not sure </label><br />

                    <!-- Question 2 -->
                    <h2>Are you saticified with the services at Allan Galphin?</h2>
                    <!-- Here are the choices for the second question. Notice how each input tag has the same name (q5), but a different name than the previous question. -->
                    <label><input type="radio" name="q2" value="c1" /> Yes </label><br />
                    <label><input type="radio" name="q2" value="c2" /> No </label><br />
                    <label><input type="radio" name="q2" value="c3" /> Not sure </label><br />

                    <!-- Question 3 -->
                    <h2>Do you like the way students are attended to at Allan Galphin?</h2>
                    <!-- Here are the choices for the second question. Notice how each input tag has the same name (q2), but a different name than the previous question. -->
                    <label><input type="radio" name="q3" value="c1" /> Yes </label><br />
                    <label><input type="radio" name="q3" value="c2" /> No </label><br />
                    <label><input type="radio" name="q3" value="c3" /> Not sure </label><br />

                    <!-- Question 4 -->
                    <h2>Do services delay at Allan Galpin?</h2>
                    <!-- Here are the choices for the second question. Notice how each input tag has the same name (q2), but a different name than the previous question. -->
                    <label><input type="radio" name="q4" value="c1" /> Yes </label><br />
                    <label><input type="radio" name="q4" value="c2" /> No </label><br />
                    <label><input type="radio" name="q4" value="c3" /> Not sure </label><br />

                    <!-- Question 5 -->
                    <h2>Would you recommend students to continue using Allan Galpin?</h2>
                    <!-- Here are the choices for the second question. Notice how each input tag has the same name (q4), but a different name than the previous question. -->
                    <label><input type="radio" name="q5" value="c1" /> Yes </label><br />
                    <label><input type="radio" name="q5" value="c2" /> No </label><br />
                    <label><input type="radio" name="q5" value="c3" /> Not sure </label><br />

                    <button type="submit" class="sub" name = "health" id="submit" onclick="tabulateAnswers()">
                    Submit Your Answers
                    </button>
                    <button type="reset" class="sub" id="reset" onclick="resetAnswer()">Reset</button>
                </form>

                <div id="answer">This Form will expire on <strong>02/12/12 8:00pm</strong></div>
            </div>

<?php require_once('../layoutT/footer.php'); ?>