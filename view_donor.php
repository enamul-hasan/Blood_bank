<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
        <title>View donor Records</title>
		
</head>
<body>
<p> <p><a href="acceptor_after_view.php?prog=<?php echo $prog;?>">Go BACK</a>  </p></p>
<?php

/* 
        VIEW.PHP
        Displays all data from 'donor' table
*/

        // connect to the database
       mysql_connect ("localhost", "root","")  or die (mysql_error());
mysql_select_db ("b_bank");

        // get results from database
        $result = mysql_query("SELECT * FROM donor") 
                or die(mysql_error());  
                
        // display data in table
        echo "<p><b>Showing Blood Collection</b> | </p>";
        
        echo "<table border='1' cellpadding='10'>";
        echo "<tr> <th>Donor Name</th> <th>Donor Email</th><th>Donor Contact</th> <th>Donor Adress</th> <th>Blood_Group</th> </tr>";

        // loop through results of database query, displaying them in the table
        while($row = mysql_fetch_array( $result )) {
                
                // echo out the contents of each row into a table
                echo "<tr>";
                echo '<td>' . $row['donor_name'] . '</td>';
                echo '<td>' . $row['donor_email'] . '</td>';
				echo '<td>' . $row['donor_contact'] . '</td>';
				echo '<td>' . $row['donor_address'] . '</td>';
				echo '<td>' . $row['donor_blood_group'] . '</td>';
                
                
                
				//echo '<td><a href="edit_stu_info.php?id=' . $row['id'] . '">Edit</a></td>';
                echo "</tr>"; 
        } 

        // close table>
        echo "</table>";
?>


</body>
</html> 