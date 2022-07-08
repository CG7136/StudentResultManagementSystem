<?php
// Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";
$database = "student";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Die if connection was not successful
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
    echo "";
}

$sql = "SELECT * FROM `std` WHERE `year` LIKE 'SE'";
$result = mysqli_query($conn, $sql);

$num = mysqli_num_rows($result);

echo " <br><br>Number of Students in SE :";
echo $num;
echo "<br>";
// Display the rows returned by the sql query
if($num> 0){
   
    while($row = mysqli_fetch_assoc($result)){
        // echo var_dump($row);
        echo $row['rollno'] .  " ". $row['name'] ." ". $row['email'] ." ". $row['year'];
        echo "<br>";
    }


}
?>
