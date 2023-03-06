<html>
<body>
<?php
$con=mysqli_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysqli_select_db($con,"school");

$sql="INSERT INTO feed(Firstname,Lastname,Feedback)
VALUES
('$_POST[front_firstname]','$_POST[front_lastname]','$_POST[front_feedback]')";

if(mysqli_query($con, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
}
$sql = "SELECT * from feed";
   mysqli_select_db($con,"school");
   $retval = mysqli_query( $con,$sql );
   
   if(! $retval ) {
      die('Could not get data: ' . mysqli_error());
   }
   
   while($row = mysqli_fetch_assoc($retval)) {
      echo "Firstname :{$row["Firstname"]}  <br> "
      echo "Lastname :{$row["Lastname"]}  <br> "
      echo "Feedback :{$row["Feedback"]}  <br> ";         
   }
   
   echo "Fetched data successfully\n";
   

mysqli_close($con);
?>
</body>
</html>