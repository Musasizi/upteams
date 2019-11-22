<?php
 extract($_REQUEST);
// print_r ($p);
// echo "I am trying to work";
// echo $_REQUEST;
$req = $_POST['q1'];

// echo $_POST['q1'];
 echo $q1;
 echo $q2;
 echo $q3;
 echo $q4;


echo '<h2>What gets you the most excited?</h2>';






//What gets you the most excited?
// echo $_POST;

// echo $req;
// print $_POST;
// print $req;
// print $_POST['qtn'];





?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    

<?php
echo "<h2>$q1</h2>";

$taken = 'checked';



// if ($q1 == 'c1') {echo $taken;}  




?>





<?php

$questions = array("What gets you the most excited?", " Experimenting, discovering, and learning", "Helping others",
 "Music, movies, games, and making others laugh", "Taking risks");


//  foreach($questions as $question){
//      echo "'<label><input type='radio' name='q1' value='c1'  disabled' .if ($q1 == 'c1') {echo $taken;} >
//     $question.'</label><br />'";

//     // echo '<label><input type="radio" name="q1" value="c1"  disabled'. (if ($q1 == 'c1') {echo $taken;}). '>'  .$question. '</label><br /> ';


//  }



 echo '<option value="'.$value.'" '.(($value=='United States')?'selected="selected"':"").'>'.$value.'</option>';

 //echo '<option value="'.$value.'" '.(($value=='United States')?'selected="selected"':"").'>'.$value.'</option>';


?>

<h2>What gets you the most excited?</h2>


<label><input type="radio" name="q1" value="c1"  disabled <?php if ($q1 == 'c1') {echo $taken;}  ?> >Experimenting, discovering, and learning</label><br />

<label><input type="radio" name="q1" value="c1"  disabled <?php if ($q1 == 'c1') {echo $taken;}  ?> >
    Experimenting, discovering, and learning
</label><br />
<label><input type="radio" name="q1" value="c2" disabled <?php if ($q1 == 'c2') {echo $taken;}  ?> >
    Helping others
</label><br />
<label><input type="radio" name="q1" value="c3" disabled <?php if ($q1 == 'c3') {echo $taken;}  ?> >
    Music, movies, games, and making others laugh
</label><br />
<label><input type="radio" name="q1" value="c4" disabled <?php if ($q1 == 'c4') {echo $taken;}  ?> >
    Taking risks
</label><br />




</body>
</html>