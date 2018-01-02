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
$a_id = $_GET['acceptor_id'];
$a_name = $_GET['acceptor_name'];
$a_email = $_GET['acceptor_email'];
$a_mobile = $_GET['acceptor_contact'];
$a_address = $_GET['acceptor_address'];

$query = mysql_query("update acceptor set 
acceptor_name='$a_name', acceptor_email='$a_email', acceptor_contact='$a_mobile',
acceptor_address='$a_address' where acceptor_id='$a_id'", $connection);
}
$query = mysql_query("select * from acceptor", $connection);
while ($row = mysql_fetch_array($query)) {
echo "<b><a href='update_acceptor.php?update={$row['acceptor_id']}'>{$row['acceptor_name']}</a></b>";
echo "<br />";
}
?>
</div><?php
if (isset($_GET['update'])) {
$update = $_GET['update'];
$query1 = mysql_query("select * from acceptor where acceptor_id=$update", $connection);
while ($row1 = mysql_fetch_array($query1)) {
echo "<form class='form' method='get'>";
echo "<h2>Update Form</h2>";
echo "<hr/>";
echo"<input class='input' type='hidden' name='acceptor_id' value='{$row1['acceptor_id']}' />";
echo "<br />";
echo "<label>" . "Name:" . "</label>" . "<br />";
echo"<input class='input' type='text' name='acceptor_name' value='{$row1['acceptor_name']}' />";
echo "<br />";
echo "<label>" . "Email:" . "</label>" . "<br />";
echo"<input class='input' type='text' name='acceptor_email' value='{$row1['acceptor_email']}' />";
echo "<br />";
echo "<label>" . "Mobile:" . "</label>" . "<br />";
echo"<input class='input' type='text' name='acceptor_contact' value='{$row1['acceptor_contact']}' />";
echo "<br />";
echo "<label>" . "Address:" . "</label>" . "<br />";
echo "<textarea rows='15' cols='15' name='acceptor_address'>{$row1['acceptor_address']}";
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