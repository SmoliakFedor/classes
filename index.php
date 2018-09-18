<html>

<head></head>
<body>
<pre>
<?php
$arr1 = array(1, 2, 3, 6, 8, "a" => "green", "b" => "brown", "c" => "blue", "red", 45, 78, 90, 24, 567, 894);
$arr2 = array(1, 2, 3, 6, 7, "a" => "green",  "c" => "blue", "brown", 44, 78, 90, 24, 597, 874);
print_r(array_intersect($arr1, $arr2));
print_r(array_diff($arr1, $arr2));
?>
</pre>
</body>
</html>
?>

