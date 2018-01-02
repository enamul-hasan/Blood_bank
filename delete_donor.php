<!DOCTYPE html>
<html>
<head>
<title>Delete Data Using PHP- Demo Preview</title>
<meta content="noindex, nofollow" name="robot">
<link href="style1.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="maindiv">
<div class="divA">
<div class="title">
<h2>Delete Data Using PHP</h2>
</div>
<div class="divB">
<div class="divD">
<p><a href="admin_delete.php" title="Go To Home">Home</a></p>
<p>Click On Menu</p>
<?php
$connection = mysql_connect("localhost", "root", ""); // Eastablishing Connection With Server.
$db = mysql_select_db("b_bank", $connection); // Selecting Database From Server.
if (isset($_GET['del'])) {
$del = $_GET['del'];
//SQL query for deletion.
$query1 = mysql_query("delete from donor where donor_id=$del", $connection);
}
$query = mysql_query("select * from donor", $connection); // SQL query to fetch data to display in menu.
while ($row = mysql_fetch_array($query)) {
echo "<b><a href=\"delete_donor.php?id={$row['donor_id']}\">{$row['donor_name']}</a></b>";
echo "<br />";
}
?>
</div><?php
if (isset($_GET['id'])) {
$id = $_GET['id'];
// SQL query to Display Details.
$query1 = mysql_query("select * from donor where donor_id=$id", $connection);
while ($row1 = mysql_fetch_array($query1)) {
?>
<form class="form">
<h2>---Details---</h2>
<span>Name:</span> <?php echo $row1['donor_name']."<br>"; ?>
<span>E-mail:</span> <?php echo $row1['donor_email']."<br>"; ?>
<span>Contact No:</span> <?php echo $row1['donor_contact']."<br>"; ?>
<span>Address:</span> <?php echo $row1['donor_address']."<br>"; ?>
<span>Blood Group:</span> <?php echo $row1['donor_blood_group']."<br>"; ?>
<?php echo "<b><a href=\"delete_donor.php?del={$row1['donor_id']}\"><input type=\"button\" class=\"submit\" value=\"Delete\"/></a></b>"; ?>
</form><?php
}
}
// Closing Connection with Server.
mysql_close($connection);
?>
<div class="clear"></div>
</div>
<div class="clear"></div>
</div>
</body>
</html>