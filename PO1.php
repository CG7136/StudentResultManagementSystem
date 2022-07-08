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
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800">
    <link rel="stylesheet" href="assets/css/Section-Title.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/fe1.css">
    

    <title>PASSOUT STUDENTS </title>

<?php



include "db_student1.php";

$sql = "SELECT * FROM `std` WHERE `year` LIKE 'PO'";
$result = mysqli_query($conn, $sql);

// Find the number of records returned
$num = mysqli_num_rows($result);
?>

<body>
<div class="caption v-middle text-center">
					<h1 class="cd-headline clip">
                    <a class="heading1" href="home.php">
			            <span class="blc">Student | </span>
			            <span class="cd-words-wrapper">
			              <b class="is-visible">DBMS.</b>
			            </span>
                    </a>
	          		</h1>
				</div>
        <nav class="navbar navbar-light navbar-expand-lg navigation-clean-search">
                    <div class="container"><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-2"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navcol-2">
                        </form><a class="btn btn-light action-button" role="button" href="home.php">HOME </a>
                    </form><a class="btn btn-light action-button" role="button" href="registrationForm.php"  >Register New Student</a>    
                </form><a class="btn btn-light action-button" role="button" href="updateDetails.php"  >Update Student Details</a>
                
                <form class="me-auto search-form " action = "search.php" method ="get">
                    <div class="d-flex align-items-center"><label class="form-label d-flex mb-0" for="search-field"><i class="fa fa-search"></i></label><input class="form-control search-field" placeholder="Search Student" type="search" id="search-field" name="search"></div>
                <ul class="navbar-nav">
                    <li class="nav-item"></li>
                    <!-- <li class="nav-item btn btn-light action-button"><a class="nav-link" href="registrationForm.php">Register New Student</a></li> -->
                    <!-- <li class=" btn btn-light action-button"><a class="nav-link" href="updateDetails.php">Update Details</a></li> -->
                </ul>
</form><a class="btn btn-light action-button" role="button" href="logout.php">Log Out </a>

</div>
</div>
    </nav>
    
<div class="container">
  <h2>PASSOUT STUDENTS <small><?php
echo "      (Number of PassOut Students :";
echo $num." )";

  ?></small></h2>
  <ul class="responsive-table">
    <li class="table-header">
      <div class="col col-1">Roll Number</div>
      <div class="col col-2">Name</div>
      <div class="col col-3">Email</div>
      <div class="col col-4">Year</div>
    </li>

</body>



<?php
echo "<br>";

if($num> 0){
    while($row = mysqli_fetch_assoc($result)){
?> 

<!-- <div class="container"> -->
  
  <ul class="responsive-table">
   
    <li class="table-row">

      <div class="col col-1" data-label="Job Id">  <?php echo $row['rollno'];?></div>
       
        
      <div class="col col-2" data-label="Customer Name"><?php  echo $row['name']; ?></div>


        
      <div class="col col-3" data-label="Amount"><?php echo $row['email']; ?></div> 

      <div class="col col-4" data-label="Payment Status"><?php  echo'passout'; ?></div>
      

      </li>
      </ul>
<!-- </div> -->
    
  
<?php    
}


}
?>


</head>
<body>
    
</body>
</html>