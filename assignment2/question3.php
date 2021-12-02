<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question 3 </title>
</head>
<body>
<?php 
function GradeCheck($num){
if($num>=0 && $num<60){
    echo "<h1>Your Grade is F and your grade Point is 0.0</h1>";
}
else if($num>=60 && $num<=66){
    echo "<h1>Your Grade is D- and your grade Point is 1.0</h1>";
}
else if($num>=67 && $num<=69){
    echo "<h1>Your Grade is D+ and your grade Point is 1.3</h1>";
}
else if($num>=70 && $num<=72){
    echo "<h1>Your Grade is C- and your grade Point is 1.7</h1>";
}
else if($num>=73 && $num<=76){
    echo "<h1>Your Grade is C and your grade Point is 2.0</h1>";
}
else if($num>=77 && $num<=79){
    echo "<h1>Your Grade is C+ and your grade Point is 2.3</h1>";
}
else if($num>=80 && $num<=82){
    echo "<h1>Your Grade is B- and your grade Point is 2.7</h1>";
}
else if($num>=83 && $num<=86){
    echo "<h1>Your Grade is B and your grade Point is 3.0</h1>";
}
else if($num>=87 && $num<=89){
    echo "<h1>Your Grade is B+ and your grade Point is 3.3</h1>";
}
else if($num>=90 && $num<=92){
    echo "<h1>Your Grade is A- and your grade Point is 3.0</h1>";
}
else if($num>=93 && $num<=100){
    echo "<h1>Your Grade is A- and your grade Point is 3.0</h1>";
}
else{
    echo "Invalid Marks";
}


}

GradeCheck(73);
GradeCheck(97);
GradeCheck(89);
GradeCheck(77);



?>

</body>
</html>