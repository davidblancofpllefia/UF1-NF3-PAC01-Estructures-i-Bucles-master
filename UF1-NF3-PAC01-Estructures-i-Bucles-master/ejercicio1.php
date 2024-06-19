<html>
<head>
<title> Ejercicio 1</title>
</head>
<body>
<div>
<?php
date_default_timezone_set("America/New_York");
echo "Two days ago it was ";
$twoDaysAgo = date("M d Y", strtotime("-2 days"));
echo $twoDaysAgo;
echo "<br/>";
echo "The next month is ";
echo date("F", strtotime("+1 month"));
echo "<br/>";
echo "There are ";
echo date("t", strtotime("+1 month"));
echo " days in the next month";
echo "<br/>";
$remainingMonths = 12 - date("n");
echo "There are ";
echo $remainingMonths;
echo " months left in the current year";
?>
<br/>
</div>
</body>
</html>
