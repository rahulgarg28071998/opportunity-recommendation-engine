<?php
$db_host = 'localhost'; // Server Name
$db_user = 'root'; // Username
$db_pass = ''; // Password
$db_name = 'opportunity_management'; // Database Name

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
    die ('Failed to connect to MySQL: ' . mysqli_connect_error());  
}


?>
  
<?php
/* Insert data from form submission */
  
  $name=$_POST['name'];
  $email=$_POST['email'];
  $contact=$_POST['contact'];
  $address=$_POST['address'];
  
  $sql="INSERT INTO accounts (name, email, contact, address)
    VALUES ('".$name."', '".$email."', '".$contact."', '".$address."')";
  mysqli_query($conn, $sql) or die("Error: " . mysqli_error());
      echo "new account added";
      header("location: welcome.php");
    
?>




<?php
$db_host = 'localhost'; // Server Name
$db_user = 'root'; // Username
$db_pass = ''; // Password
$db_name = 'opps'; // Database Name

$conn1 = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn1) {
    die ('Failed to connect to MySQL: ' . mysqli_connect_error());  
}


?>
<?php
/* Insert data from form submission */
  
  $name=$_POST['name'];
  $amount=$_POST['amount'];
  $stage=$_POST['stage'];
  
  
  $sql="INSERT INTO new (name, amount, stage)
    VALUES ('".$name."', '".$amount."', '".$stage."')";
  mysqli_query($conn1, $sql) or die("Error: " . mysqli_error());
      echo "new opportunity added";
    header("location: welcome.php");
?>
