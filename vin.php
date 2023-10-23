<html>
<body>
<?php
$con=mysqli_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysqli_select_db($con,"bookkart");

$sql="INSERT INTO vinay(Feedback)
VALUES
('$_POST[front_feedback]')";

if(mysqli_query($con, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
}
$sql = "SELECT * from vinay";
   mysqli_select_db($con,"bookkart");
   $retval = mysqli_query( $con,$sql );
   
   if(! $retval ) {
      die('Could not get data: ' . mysqli_error());
   }
   
   while($row = mysqli_fetch_assoc($retval)) {
      echo "Feedback :{$row["Feedback"]}  <br> ";
         
   }
   
   echo "Fetched data successfully\n";
   
echo '<a href ="home2.html">Click here </a>';
mysqli_close($con);
?>
</body>
</html>