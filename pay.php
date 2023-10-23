<html>
<body>
<?php
$con=mysqli_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysqli_select_db($con,"bookkart");

$sql="INSERT INTO payment(Firstname,Lastname,PaymentMethod,Phonenumber,Email,Address)
VALUES
('$_POST[front_firstname]','$_POST[front_lastname]','$_POST[front_payment]','$_POST[front_phn]','$_POST[front_email]','$_POST[front_address]')";

if(mysqli_query($con, $sql)){
    echo "Transaction Processed Succeessfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($con); 
}
echo '<a href="homeuser.html">Click here</a>';
mysqli_close($con);
?>
</body>
</html>