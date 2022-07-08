<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/Animated-Type-Heading.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Search.css">
    <link rel="stylesheet" href="assets/css/Perfect-navigation-bar.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <title>Document</title>
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

$sql = "SELECT * FROM `std` WHERE `year` LIKE 'FE'";
$result = mysqli_query($conn, $sql);

// Find the number of records returned
$num = mysqli_num_rows($result);

echo " <br><br>Number of Students in FE :";
echo $num;
echo "<br>";

if($num> 0){
    while($row = mysqli_fetch_assoc($result)){
        // echo var_dump($row);
        echo $row['rollno'] .  " ". $row['name'] ." ". $row['email'] ." ". $row['year'];
        echo "<br>";
    }


}
?>


</head>
<body>
    
</body>
</html>