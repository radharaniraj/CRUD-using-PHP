<!DOCTYPE html>
<html>
<body>

<?php
//function declaration
function familyName($fname) {
  echo "$fname Refsnes.<br>";
}
familyName("Jani");
familyName("Hege");
familyName("Stale");
familyName("Kai Jim");
familyName("Borge");
//one more function
function familyNamee($fname, $year) {
  echo "$fname Refsnes. Born in $year <br>";
}

familyNamee("Hege","1975");
familyNamee("Stale","1978");
familyNamee("Kai Jim","1983");
//function without strict 
function addNumbers(int $a, int $b) {
  return $a + $b;
}
echo addNumbers(5, "5 days")."<br>";
//pass by Reference
function add_five(&$value) {
  $value += 5;
}

$num = 2;
add_five($num);
echo $num;
?>

</body>
</html>
