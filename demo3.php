<html>
<body>
<form>
Enter a Number: <input type="number" name="num">
<input type = "submit" name="submit" value="Submit">
</form>
<?php
if(isset($_GET['submit'])){
  $num = $_GET['num'];
  if ($num >= 70){
      echo "Passed."; 
      } 
  elseif (69 >= $num && $num >= 60){
      echo "Remedial.";
      } 
  elseif ($num < 59){
      echo "Failed.";
      }
  else {
      echo "Invalid Input";
  }
}

?>
</body>
<html>