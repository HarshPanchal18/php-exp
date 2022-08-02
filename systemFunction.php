<html>
<body>

<?php
echo pi();
echo(min(0, 150, 30, 20, -8, -200) . "<br>");
echo(max(0, 150, 30, 20, -8, -200));
echo(abs(-6.7));
echo(sqrt(64)); // returns 8
echo(round(0.60)); // returns 1
echo(round(0.49)); // returns 0
echo(rand());
echo (ceil(3.3)."<br/>"); // 4
echo (ceil(7.333)."<br/>"); // 8
echo (ceil(-4.8)."<br/>"); // -4
echo (floor(3.3)."<br/>"); // 3
echo (floor(7.333)."<br/>"); // 7
echo (floor(-4.8)."<br/>"); // -5

$num=pow(3, 2);
echo "Your number is = pow (3, 2)".'<br>';
echo "By using sqrt function Your number is : ".$num;

$x = 7;
$y = 2;
echo "Your Given Nos is : $x=7, $y=2";
$result ="By using 'fmod()' Function your value is:".fmod($x,$y);
echo $result;

echo "Oct 3, 1975 was on a ".date("l", mktime(0,0,0,10,3,1975)) . "<br><br>";
//The mktime() function is useful for doing date arithmetic and validation.
//It will automatically calculate the correct value for out-of-range input:

echo date("M-d-Y",mktime(0,0,0,12,36,2001)) . "<br>";
echo date("M-d-Y",mktime(0,0,0,14,1,2001)) . "<br>";
echo date("M-d-Y",mktime(0,0,0,1,1,2001)) . "<br>";
echo date("M-d-Y",mktime(0,0,0,1,1,99)) . "<br>";

print_r(getdate());
echo "<br><br>";

// Return date/time info of a timestamp; then format the output
$mydate=getdate(date("U"));
echo "$mydate[weekday], $mydate[month] $mydate[mday], $mydate[year]";

?>

</body>
</html>
