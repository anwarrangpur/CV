
<html>

<head>
<title>Insert </title>

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
	$name=$_POST['name'];
	$dist=$_POST['dist'];
	$address = $_POST['data'];
	$age = $_POST['age'];
	$salary = $_POST['salary']; 
	
	
	
$sql="INSERT INTO information (Name, District, Address, Age, Salary) VALUES ( '$name','$dist','$address','$age','$salary')";




if(!mysql_query($sql))
	{
		die('Error: ' .mysql_error());
	}
else
{

echo "Data Inseted" ;

echo "Name : $name		"; 
echo "D : $dist		"; 
echo "Address : $address		";
echo "Age: $age		" ;
echo "Salary : $salary		";}

 
?>

</html>