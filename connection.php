<?php

// Uncommented lines should not contain PHP opening tags

// Old code:
// //$conn= new mysqli('localhost','root','','bloodbank_db')or die("Could not connect to mysql".mysqli_error($con));
// //
// //$servername = "db"; // MySQL hostname (service name in Docker Compose)
// //$username = "gourish"; // MySQL username
// //$password = "Gourish@12"; // MySQL password
// //$database = "bloodbank_db"; // MySQL database name

// Create connection
$conn = mysqli_connect(
    "db",
    "ambika",
    "ambika",
    "foodorder"
);