<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question 2 </title>
</head>
<body>
<?php 
function AreaCircle($radius){
echo"<h1>The area of the circle is ".pi()*$radius*$radius."</h1>";
}
function AreaSquare($len){
        echo"<h1>The area of the square is ".$len*$len."</h1>"; 
}
function AreaRectangle($len1,$len2){
    echo"<h1>The area of the Rectangle is ".$len1*$len2."</h1>"; 
}


AreaCircle(2);
AreaSquare(2);
AreaRectangle(2,3);


?>

</body>
</html>