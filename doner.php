<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Blood Bank</title>
<link href="css/styles.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="header-wrapper">
  <div class="header">
    <div class="logo">
      <h1>Blood Bank </h1>
    </div>
    <!---logo ends here -->
    <div class="menu">
      <ul>
        <li><a href="acceptor_register.php" title="Insert Acceptor Information Here">Acceptor</a></li>
		<li><a  href="doner_register.php" title="Insert Doner Information Here">Donar</a></li>
        <li><a href="admin.php">Admin</a></li>
      </ul>
    </div>
    <!--- menu ends here -->
  </div>
  <!---headerends here -->
</div>
<div class="clear"></div>
<div class="banner-wrapper">
  <div class="banner">
    <div class="banner-image"> <img src="images/donateblood.jpg" alt="img" /> </div>
    <!---banner-image ends here-->
  </div>
  <!---bannerends here-->
</div>
<!---banner-wrapper ends here-->

<?php

$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="b_bank"; // Database name 
$tbl_name="doner"; // Table name 

// Connect to server and select database.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

// Get values from form 
$d_id = $_GET['doner_id'];
$d_name = $_GET['doner_name'];
$d_email = $_GET['doner_email'];
$d_mobile = $_GET['doner_contact'];
$d_address = $_GET['doner_address'];
$d_blood_group = $_GET['doner_blood_group'];
// Insert data into mysql 
$sql=mysql_query("INSERT INTO $tbl_name VALUES('$d_id', '$d_name', '$d_email', '$d_mobile','$d_address','$d_blood_group')");
//$result=mysql_query($sql);

// if successfully insert data into database, displays message "Successful".

if($sql){
?>
        <script>alert('successfully registered ');</script>
        <?php

}

else {
?>
        <script>alert('error while registering you...');</script>
        <?php
}
?> 

<?php 
// close connection 
mysql_close();

?>

</body>
</html>