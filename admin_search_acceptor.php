<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Searchn result</title>
<link rel="stylesheet" type="text/css" href="view.css" media="all">
<script type="text/javascript" src="view.js"></script>



</head>
<body id="main_body" >
	
	<img id="top" src="top.png" alt="">
	<div id="form_container">
<?php
mysql_connect ("localhost", "root","")  or die (mysql_error());
mysql_select_db ("b_bank");
 
$term = $_GET['term'];

 
$sql = mysql_query("select * from acceptor where acceptor_id COLLATE latin1_general_cs like '$term'");
 
while ($row = mysql_fetch_array($sql)){
   // echo 'ID: '.$row['ID'];
   // echo '<br/> ID: '.$row['id'];
    echo '<br/> acceptor Name: '.$row['acceptor_name'];
    echo '<br/> acceptor Email: '.$row['acceptor_email'];
	 echo '<br/> acceptor Contact: '.$row['acceptor_contact'];
	 echo '<br/> Blood Group: '.$row['acceptor_blood_group'];
    echo '<br/><br/>';
    }
	
	echo "<BR>";
echo "<a href='admin_search_res_acceptor.php' title='Search again'>Search Another Blood Info</a>";
echo "<BR>";
echo "<a href='admin_search.php'>Go Home</a>";

 
?>
<div id="footer">
			
		</div>
	</div>
	<img id="bottom" src="bottom.png" alt="">
	</body>
