<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Student Profile Page Design Example</title>

    <meta name="author" content="Codeconvey" />
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet"><link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css'>

    <!--Only for demo purpose - no need to add.-->
    <link rel="stylesheet" href="assets/css/demo.css" />
    
	    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<?php
$rollno= $_GET['search'];
include "db_student1.php";

$sql = "SELECT * FROM `std` WHERE `rollno` LIKE '$rollno'";
$result = mysqli_query($conn, $sql);
$num = mysqli_num_rows($result);


if($num> 0){
if($row = mysqli_fetch_assoc($result)){

?>
		
<div class="ScriptTop">
    <div class="rt-container">
        <div class="col-rt-4" id="float-right">
 
            <!-- Ad Here -->
            
        </div>
        
    </div>
</div>

<header class="ScriptHeader">
    <div class="rt-container">
    	<div class="col-rt-12">
        	<div class="rt-heading">
            	<h1>Student Profile</h1>
         
            </div>
        </div>
    </div>
</header>

<section>
    <div class="rt-container">
          <div class="col-rt-12">
              <div class="Scriptcontent">
              
<!-- Student Profile -->
<div class="student-profile py-4">
  <div class="container">
    <div class="row">
      <div class="col-lg-4">
        <div class="card shadow-sm">
          <div class="card-header bg-transparent text-center">
            <img class="profile_img" src="https://icons.veryicon.com/png/o/miscellaneous/two-color-icon-library/user-286.png" alt="student dp">
            <h3><?php  echo $row['name']; ?></h3>
          </div>
          <div class="card-body">
            <p class="mb-0"><strong class="pr-1">Roll No:</strong><?php echo $rollno ?></p>
            <p class="mb-0"><strong class="pr-1"></strong></p>
            
          </div>
        </div>
      </div>
      <div class="col-lg-8">
        <div class="card shadow-sm">
          <div class="card-header bg-transparent border-0">
            <h3 class="mb-0"><i class="far fa-clone pr-1"></i>General Information</h3>
          </div>
          <div class="card-body pt-0">
            <table class="table table-bordered">
              <tr>
                <th width="30%">email</th>
                <td width="2%">:</td>
                <td><?php  echo $row['email']; ?></td>
              </tr>
              <tr>
                <th width="30%">Academic Year	</th>
                <td width="2%">:</td>
                <td><?php  echo $row['year']; ?></td>
              </tr>
              <tr>
                <th width="30%">First Year Cgpa</th>
                <td width="2%">:</td>
                <td><?php  echo $row['cgpa1']; ?></td>
              </tr>
              <tr>
                <th width="30%">SECOND YEAR Cgpa</th>
                <td width="2%">:</td>
                <td><?php  echo $row['cgpa2']; ?></td>
              </tr>
              <tr>
                <th width="30%">Third YEAR Cgpa</th>
                <td width="2%">:</td>
                <td><?php  echo $row['cgpa3']; ?></td>
              </tr>

              <tr>
                <th width="30%">Fourth YEAR Cgpa</th>
                <td width="2%">:</td>
                <td><?php  echo $row['cgpa4']; ?></td>
              </tr>
            </table>
          </div>
        </div>
          <div style="height: 26px"></div>
          
        
    </div>
  </div>
</div>
<!-- partial -->
           
    		</div>
		</div>
    </div>
</section>
     


    <!-- Analytics -->
<?php  }
}
else{
  echo "Roll no not found Enter the correcy Roll No ";
} ?>
	</body>
</html>