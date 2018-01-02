<!DOCTYPE html>
<html>
<head>
<title></title>
<link href="style1.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="maindiv">
<div class="divA">
<div class="title">
<h2>Update Data Using PHP</h2>
</div>
<div class="divB">
<div class="divD">
<p><a href="admin_update.php" title="Go To Home">Home</a></p>
<p>Click On Menu</p>
<?php
$connection = mysql_connect("localhost", "root", "");
$db = mysql_select_db("b_bank", $connection);
if (isset($_GET['submit'])) {
$d_id = $_GET['doner_id'];
$d_name = $_GET['doner_name'];
$d_email = $_GET['doner_email'];
$d_mobile = $_GET['doner_contact'];
$d_address = $_GET['doner_address'];

$query = mysql_query("update doner set 
doner_name='$d_name', doner_email='$d_email', doner_contact='$d_mobile',
doner_address='$d_address' where doner_id='$d_id'", $connection);
}
$query = mysql_query("select * from doner", $connection);
while ($row = mysql_fetch_array($query)) {
echo "<b><a href='update_doner.php?update={$row['doner_id']}'>{$row['doner_name']}</a></b>";
echo "<br />";
}
?>
</div><?php
if (isset($_GET['update'])) {
$update = $_GET['update'];
$query1 = mysql_query("select * from doner where doner_id=$update", $connection);
while ($row1 = mysql_fetch_array($query1)) {
echo "<form class='form' method='get'>";
echo "<h2>Update Form</h2>";
echo "<hr/>";
echo"<input class='input' type='hidden' name='doner_id' value='{$row1['doner_id']}' />";
echo "<br />";
echo "<label>" . "Name:" . "</label>" . "<br />";
echo"<input class='input' type='text' name='doner_name' value='{$row1['doner_name']}' />";
echo "<br />";
echo "<label>" . "Email:" . "</label>" . "<br />";
echo"<input class='input' type='text' name='doner_email' value='{$row1['doner_email']}' />";
echo "<br />";
echo "<label>" . "Mobile:" . "</label>" . "<br />";
echo"<input class='input' type='text' name='doner_contact' value='{$row1['doner_contact']}' />";
echo "<br />";
echo "<label>" . "Address:" . "</label>" . "<br />";
echo "<textarea rows='15' cols='15' name='doner_address'>{$row1['doner_address']}";
echo "</textarea>";
echo "<br />";
echo "<input class='submit' type='submit' name='submit' value='update' />";
echo "</form>";
}
}
if (isset($_GET['submit'])) {
echo '<div class="form" id="form3"><br><br><br><br><br><br>
<Span>Data Updated Successfuly......!!</span></div>';
}
?>
<div class="clear"></div>
</div>
<div class="clear"></div>
</div>
</div><?php
mysql_close($connection);
?>

</body>
</html>