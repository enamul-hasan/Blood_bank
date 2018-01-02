
<?php

$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="b_bank"; // Database name 
$tbl_name="blood_request"; // Table name 

// Connect to server and select database.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

// Get values from form 
$a_id=$_GET['acceptor_id'];
$b_type=$_GET['blood_type'];


// Insert data into mysql 
$sql=mysql_query("INSERT INTO $tbl_name VALUES('$a_id', '$b_type')");
//$result=mysql_query($sql);

// if successfully insert data into database, displays message "Successful".

if($sql){
echo "Successful";
echo "<BR>";
echo "<a href='blood_request1.php'>Add Another</a>";
echo "<BR>";
echo "<a href='acceptor_before_register.php'>Index Page</a>";

}

else {
echo "ERROR";
}
?> 

<?php 
// close connection 
mysql_close();
?>