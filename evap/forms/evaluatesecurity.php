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
                    <li class="breadcrumb-item active">Security</li>
                </ol>

                <!-- Page Content -->
                <!-- <h1>Blank Page</h1>
                <hr>
                <p>This is a great starting point for new custom pages.</p> -->

            </div>
            <!-- /.container-fluid -->

            <div id="wrapper">
                <!-- <h1>Evaluation system for UCU</h1> -->

                <form id="quiz" action="../questions/evalsecurity.php" method="POST">
                    <!-- Question 1 -->
                    <h2>Security</h2>
                    <h2>How do you find Security at UCU?</h2>
                    <!-- Here are the choices for the first question. Each input tag must have the same name. For this question, the name is q1. -->
                    <!-- The value is which answer the choice corresponds to. -->
                    <label><input type="radio" name="q1" value="c1" /> Very tight </label><br />
                    <label><input type="radio" name="q1" value="c2" /> Tight </label><br />
                    <label><input type="radio" name="q1" value="c3" /> Fair </label><br />

                    <!-- Question 2 -->
                    <h2>Do you feel secure at UCU?</h2>
                    <!-- Here are the choices for the second question. Notice how each input tag has the same name (q2), but a different name than the previous question. -->
                    <label><input type="radio" name="q2" value="c1" /> Yes </label><br />
                    <label><input type="radio" name="q2" value="c2" /> No </label><br />
                    <label><input type="radio" name="q2" value="c3" /> Not sure </label><br />

                    <!-- Question 3 -->
                    <h2>Are you satsified with the security guards?</h2>
                    <!-- Choices for the third question -->
                    <label><input type="radio" name="q3" value="c1" /> Yes </label><br />
                    <label><input type="radio" name="q3" value="c2" /> No </label><br />
                    <label><input type="radio" name="q3" value="c3" /> Not sure </label><br />

                    <h2>Would you recommend security improvements ?</h2>
                    <!-- Here are the choices for the first question. Each input tag must have the same name. For this question, the name is q1. -->
                    <!-- The value is which answer the choice corresponds to. -->
                    <label><input type="radio" name="q4" value="c1" /> Yes </label><br />
                    <label><input type="radio" name="q4" value="c2" /> No </label><br />
                    <label><input type="radio" name="q4" value="c3" /> I dont know </label ><br />
            
                     <h2>Rate UCU security</h2>
                    <!-- Here are the choices for the first question. Each input tag must have the same name. For this question, the name is q1. -->
                    <!-- The value is which answer the choice corresponds to. -->
                    <label><input type="radio" name="q5" value="c1" /> 100% </label><br />
                    <label><input type="radio" name="q5" value="c2" /> 80% </label><br />
                    <label><input type="radio" name="q5" value="c3" /> 60% </label><br />

                    <button type="submit" name = "security" class="sub" id="submit" onclick="tabulateAnswers()">
                    Submit Your Answers
                    </button>
                    <button type="reset" class="sub" id="reset" onclick="resetAnswer()">Reset</button>
                </form>

                <div id="answer">This Form will expire on <strong>02/12/12 8:00pm</strong></div>
            </div>



            <?php require_once('../layoutT/footer.php'); ?>