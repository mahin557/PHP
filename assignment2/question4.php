<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question 4 </title>
</head>
<body>
<?php 
function AgeCheck($num){
if($num<2021){
    echo"<h1>Your Age is ".(2021-$num)." years old</h1>";
}
}


AgeCheck(1990);




?>

</body>
</html>