<!DOCTYPE html>
<html>
  <title>Question 2</title>
<body>

<?php  
$a=10000;
$x=0;
while($x<50){

if($x<25){
    $a+=3;
}
else{
    $a-=6;
}
echo "<p>".$a."</p>";
$x++;   
}

?>  

</body>
</html>