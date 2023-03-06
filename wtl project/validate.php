<html>
<body>
<?php
header("Access-Control-Allow-Origin: *");

$Username=$_POST["front_username"];
$Password=$_POST["front_psw"];
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"bookkart");
$res1=mysqli_query($con,"Select Password from sign  where Username= '.$Username.'");
$res2=mysqli_query($con,"Select Username from sign  where Password= '.$Password.'");
if(!$Username == $res2 && !$Password == $res1)
{
echo "invalid credentials";
}
else
{
echo '<a href="homeuser.html">Click here</a>';
}

mysql_close($con);
?>
</body>
</html>