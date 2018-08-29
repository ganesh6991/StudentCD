<?php

include("db_config.php");

$title = $_POST['Tittle']; 
$Name = $_POST['Name']; 
$Position = $_POST['Position']; 
$Company = $_POST['Company']; 
$Email = $_POST['Email'];
$Address = $_POST['Address'];
$Address1 = $_POST['Address1'];
$Country = $_POST['Country'];
$Region = $_POST['Region'];
$City = $_POST['City'];
$Zip = $_POST['Zip'];
$Number = $_POST['Number'];
$gender = $_POST['gender'];

$sql = "INSERT INTO registration (title,name,position,company,email,address,address1,country,region,city,zip,number,gender)VALUES ('$title','$Name','$Position','$Company','$Email','$Address','$Address1','$Country','$Region','$City','$Zip','$Number','$gender') ";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>
