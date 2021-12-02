<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question 1 </title>
</head>
<body>
<?php 
function AgeCheck($age){
if($age <5){
    echo "<h1>This is a Child</h1>";
}
else if($age >5 && $age<=12){
    echo "<h1>This is a Boy</h1>";
}
else if($age >12 && $age<=19){
    echo "<h1>This is a Teenager</h1>";
}
else if($age >19 && $age<=40){
    echo "<h1>This is a Young Man </h1>";
} 
else{
    echo "<h1>This is an Old man </h1>";
}
}



AgeCheck(2);

?>

</body>
</html>