<!DOCTYPE html>
<html>
  <title>Question 3</title>
<body>

<?php  
for ($x= 20; $x < 1000000000000 ; $x+= 3) {



if($x%11==0){

    break;
}
  
echo "<p>".$x."</p>";
  
}


?>  

</body>
</html>