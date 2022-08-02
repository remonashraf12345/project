 <!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Answer</title>
</head>
<body>

<?php

    ini_set('display_errors',0);

   

        $first = $_POST['first'];

        $second= $_POST['second'];

    if($_POST['group1'] == 'add') {
    $ans=$first + $second;
    }
    else if($_POST['group1'] == 'subtract') {
    $ans=$first - $second;
    }
    else if($_POST['group1'] == 'times') {
   $ans= $first * $second;
    } 
    else if($_POST['group1'] == 'divide') {
    $ans= $first / $second;
    
}
    ?>
<form method="post" attribute="post" >
<p>First Value:<br/>
<input type="text" id="first" name="first"></p>
<p>Second Value:<br/>
<input type="text" id="second" name="second"></p>

<input type="radio" name="group1" id="add" value="add" checked="true"><span>+</span>
<input type="radio" name="group1" id="subtract" value="subtract"><span>-</span>
<input type="radio" name="group1" id="times" value="times"><span>*</span>
<input type="radio" name="group1" id="divide" value="divide"><span>/</span>

<button type="submit" name="answer" id="answer" value="answer">Calculate</button>
<p ><?php echo $ans;?></p>
</form>

</body>
</html>