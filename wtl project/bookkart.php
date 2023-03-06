<html>
<body>
<?php
$con=mysqli_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysqli_select_db($con,"bookkart");

$sql="INSERT INTO sign(Firstname,Lastname,Username,Password,University,Branch,DateOfBirth,Phonenumber,Email)
VALUES
('$_POST[front_firstname]','$_POST[front_lastname]','$_POST[front_username]','$_POST[front_psw]','$_POST[front_univ]','$_POST[front_branch]','$_POST[front_dob]','$_POST[front_phn]','$_POST[front_email]')";

if(mysqli_query($con, $sql)){
    echo "Records added successfully.";
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($con); 
}
echo '<a href="login2.html">Click here</a>';
mysqli_close($con);
?>
</body>
</html>