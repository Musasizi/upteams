
    <!-- Question 2 -->
    <?php  if ($row[1] == "q2") {  ?> <h2>Do you feel secure at UCU?</h2><?php  } ?>
    
    <!-- Here are the choices for the second question. Notice how each input tag has the same name (q2), but a different name than the previous question. -->
    <label><input type="radio" name="q2" value="c1" disabled /> Yes </label><br />
    <label><input type="radio" name="q2" value="c2" disabled /> No </label><br />
    <label><input type="radio" name="q2" value="c3" disabled /> Not sure </label><br />
    

    <!-- Question 3 -->
    <h2>Are you satsified with the security guards?</h2>
    <!-- Choices for the third question -->
    <label><input type="radio" name="q3" value="c1" disabled /> Yes </label><br />
    <label><input type="radio" name="q3" value="c2" disabled /> No </label><br />
    <label><input type="radio" name="q3" value="c3" disabled /> Not sure </label><br />

    <h2>Would you recommend security improvements ?</h2>
    <!-- Here are the choices for the first question. Each input tag must have the same name. For this question, the name is q1. -->
    <!-- The value is which answer the choice corresponds to. -->
    <label><input type="radio" name="q4" value="c1" disabled /> Yes </label><br />
    <label><input type="radio" name="q4" value="c2" disabled /> No </label><br />
    <label><input type="radio" name="q4" value="c3" disabled /> I dont know </label><br />

    <h2>Rate UCU security</h2>
    <!-- Here are the choices for the first question. Each input tag must have the same name. For this question, the name is q1. -->
    <!-- The value is which answer the choice corresponds to. -->
    <label><input type="radio" name="q5" value="c1" disabled /> 100% </label><br />
    <label><input type="radio" name="q5" value="c2" disabled /> 80% </label><br />
    <label><input type="radio" name="q5" value="c3" disabled /> 60% </label><br />
