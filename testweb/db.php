
<?php

// Database connection
$conn = mysqli_connect("localhost", "root", "", "tamildb");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "<h1 style=\"color:red;\">HELLO WORLD</h1>";
echo "Database connected successfully<br><br>";

//this code fro insert 

$ins = "INSERT INTO usertable(id, name) VALUES(5, 'superman')"; 

if (mysqli_query($conn, $ins)) { 
    echo "<br>Record inserted successfully"; 
    }
 else { echo "<br>Error: " . mysqli_error($conn); }

// SELECT query
$sql = "SELECT * FROM usertable";

// Execute query
$result = mysqli_query($conn, $sql);

// Fetch and display records
while ($row = mysqli_fetch_assoc($result)) {

    echo "ID: " . $row["id"] . "<br>";
    echo "Name: " . $row["name"] . "<br>";
    echo "<hr>";
}

// Close connection
mysqli_close($conn);

?>
