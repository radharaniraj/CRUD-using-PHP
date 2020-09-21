<!DOCTYPE html>
<html>
<body>

<?php 
//while loop 
$x = 1;
while($x <= 5) {
  echo "The number is: $x <br>";
  $x++;
} 
//do while loop
$x = 1;

do {
  echo "The number is: $x <br>";
  $x++;
} while ($x <= 5);
//for loop 
for ($x = 0; $x <= 100; $x+=10) {
  echo "The number is: $x <br>";
}
?>  
</body>
</html>
