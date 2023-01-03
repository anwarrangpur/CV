<html>

<head>
<title>Show </title>

 <link rel="stylesheet" href="styles.css">
</head>

<body>
<img align="center" src="9.jpg"  style="width:100%;height:150px;">
<div align = "center" class="topnav" >
  <a href="home.php">Home</a>  
  <a href="cv.php">CV</a>  
  <a href="research.php">Research</a>   
  <a href="aboutme.php">About</a>
  <a href="contact.php">Contact</a>
  <a href="show.php">Show</a>
</div>

</body>

<?php

 
	include("database_connect.php");
	 
$result = mysql_query("SELECT * FROM information");

echo "<p align=Center>";	
echo "<table border=5>";

echo "
<th bgcolor='red'>Name</th>
<th bgcolor='green'>District</th>
<th bgcolor='green'>Address</th>
<th bgcolor='red'>Age</th>
<th bgcolor='green'>Salary</th> ";

while( $row = mysql_fetch_array($result))
 {
 echo "<tr>";
    {  
	echo" <td>$row[Name]</td>
	<td>$row[District]</td>
	<td>$row[Address]</td>
	<td>$row[Age]</td>
	<td>$row[Salary]</td> ";
	}
	echo"</tr>";	
}


echo"</table>";	

	 
?>