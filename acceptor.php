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
        <li><a href="search_res.php" title="Search Blood Here">Search</a></li>
		<li><a href="view_donor.php" title="View Blood Collection">View</a></li>
		<li><a href="blood_request.php" title="Request For Blood">Request</a></li>
        <li><a href="index.php" title="Back To Home">Home</a></li>
      </ul>
    </div>
    <!--- menu ends here -->
  </div>
  <!---headerends here -->
</div>
<h2>Welcome Acceptors!</h2>
<?php

$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="b_bank"; // Database name 
$tbl_name="acceptor"; // Table name 

// Connect to server and select database.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

// Get values from form 
$a_id = $_GET['acceptor_id'];
$a_name = $_GET['acceptor_name'];
$a_email = $_GET['acceptor_email'];
$a_mobile = $_GET['acceptor_contact'];
$a_address = $_GET['acceptor_address'];
$a_blood_group = $_GET['acceptor_blood_group'];
// Insert data into mysql 
$sql=mysql_query("INSERT INTO $tbl_name VALUES('$a_id', '$a_name', '$a_email', '$a_mobile','$a_address','$a_blood_group')");
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