
<?php

$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="b_bank"; // Database name 
$tbl_name="blood"; // Table name 

// Connect to server and select database.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

// Get values from form 
$d_id=$_GET['donor_id'];
$b_code=$_GET['blood_code'];
$b_group=$_GET['blood_group'];


// Insert data into mysql 
$sql=mysql_query("INSERT INTO $tbl_name VALUES('$d_id', '$b_code', '$b_group')");
//$result=mysql_query($sql);

// if successfully insert data into database, displays message "Successful".

if($sql){
echo "Successful";
echo "<BR>";
echo "<a href='blood_info.php'>Add Another</a>";
echo "<BR>";
echo "<a href='admin.php'>Index Page</a>";

}

else {
echo "ERROR";
}
?> 

<?php 
// close connection 
mysql_close();
?>