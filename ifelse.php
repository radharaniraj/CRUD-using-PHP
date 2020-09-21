<!DOCTYPE html>
<html>
<body>

<?php
$t = date("Z");
//simple if else
if ($t < "20") {
  echo "Have a good day!";
  echo "<br>";
}
else 
{
   echo "OOps not found";
    echo "<br>";
}
//if else ladder
if ($t < "10") {
  echo "Have a good morning!";
} elseif ($t < "20") {
  echo "Have a good day!";
} else {
  echo "Have a good night!";
}
?>
 
</body>
</html>