<!DOCTYPE html>
<html>
  <title>Question 5</title>
<body>

<?php  
for ($x= 1; $x < 1000000000000 ; $x+= 6) {

if($x%5==0){

    break;
}
  
echo "<p>".$x."</p>";
  
}


?>  

</body>
</html>