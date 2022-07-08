<!DOCTYPE html>
	 	<html lang="en">
	 	
	 	<head>
	 	    <meta charset="utf-8">
	 	    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
	 	    <title>Register New Student</title>
	 	    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
	 	    <link rel="stylesheet" href="assets/css/RegistrationForm.css">
	 	    <link rel="stylesheet" href="assets/css/styles.css">
        <script src="myscripts.js"></script>
		<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/Animated-Type-Heading.css">
    <link rel="stylesheet" href="assets/css/Features-Boxed.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Search.css">
    <link rel="stylesheet" href="assets/css/Perfect-navigation-bar.css">
    <link rel="stylesheet" href="assets/css/styles.css">
	 	</head>


		 <?php

      if ($_SERVER['REQUEST_METHOD'] == 'POST'){
          

			$roll_no = $_POST['rollno'];
			$marks = $_POST['marks'];
			
			

	include "db_student1.php";

      $sql = "SELECT * FROM `std` WHERE `rollno` LIKE '$roll_no'";
      $result = mysqli_query($conn,$sql);
      $num = mysqli_num_rows($result);
      if($num> 0){
       if($row = mysqli_fetch_assoc($result)){

       if($marks> 0){

        if($row['year']=='FE'){
          $sql1 = "UPDATE `std` SET `year` = 'SE' WHERE `std`.`rollno` = $roll_no";
          $result1 = mysqli_query($conn,$sql1);
		  $sql_1 = "UPDATE `std` SET `cgpa1` = '$marks' WHERE `std`.`rollno` = $roll_no";
		  $result_1= mysqli_query($conn,$sql_1);

          ?> <div  class="alert alert-success alert-dismissible fade show" role="alert">
           <strong>Done!</strong> <?php echo $row['name']; echo " promoted to the Second year"; 
             ?><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
           </div>;
           <?php
        }

        if($row['year']=='SE'){
         $sql2 =   "UPDATE `std` SET `year` = 'TE' WHERE `std`.`rollno` = $roll_no";
         $result = mysqli_query($conn, $sql2);
		 $sql_2 = "UPDATE `std` SET `cgpa2` = '$marks' WHERE `std`.`rollno` = $roll_no";
		 $result_2= mysqli_query($conn,$sql_2);

         ?> <div  class="alert alert-success alert-dismissible fade show" role="alert">
         <strong>Done!</strong> <?php echo $row['name']; echo " promoted to the Third year"; 
           ?><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
         </div>;
         <?php

        }

        if($row['year']=='TE'){
          $sql2 =   "UPDATE `std` SET `year` = 'BE' WHERE `std`.`rollno` = $roll_no";
          $result = mysqli_query($conn, $sql2);
		  $sql_3 = "UPDATE `std` SET `cgpa3` = '$marks' WHERE `std`.`rollno` = $roll_no";
		  $result_3= mysqli_query($conn,$sql_3);
 
          ?> <div  class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Done!</strong> <?php echo $row['name']; echo " promoted to the Fourth year"; 
            ?><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>;
          <?php
 
         }

		 if($row['year']=='BE'){
			$sql2 =   "UPDATE `std` SET `year` = 'PO' WHERE `std`.`rollno` = $roll_no";
			$result = mysqli_query($conn, $sql2);
			$sql_4 = "UPDATE `std` SET `cgpa4` = '$marks' WHERE `std`.`rollno` = $roll_no";
			$result_4= mysqli_query($conn,$sql_4);
   
			?> <div  class="alert alert-success alert-dismissible fade show" role="alert">
			<strong>Done!</strong> <?php echo $row['name']; echo " Completed BE "; 
			  ?><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>;
			<?php
   
		   }
   

      }
      else{ 
        ?>
        <div  class="alert alert-danger d-flex align-items-center" role="alert">
				  <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
				 <div>
				 	<?php echo $row['name']; echo " should clear Exam to promote in next year"; ?>
			   </div>
				 </div>'
     <?php
      }
       
			  

			  // if($result){
				//   echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
				//   <strong>Done!</strong> Data Submitted Successfully.
				//   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				// </div>';
			  // }


        
			  // else{
				//   echo '<div class="alert alert-danger d-flex align-items-center" role="alert">
				//   <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
				//   <div>
				// 	Data Not Submitted
				//   </div>
				// </div>';
			
        // }\
        }  
      }
			}
		  

      ?>


	 	
	 	<body>
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
	 	    <div class="row register-form">
	 	        <div class="col-md-8 offset-md-2">
	 	            <form  action = "updateDetails.php"  method = "post" class="custom-form">
	 	                <h1>Update Profile of Student</h1>
	 	                <div class="row form-group">
	 	                    <div class="col-sm-4 col-md-4 label-column"></div>
	 	                    <div class="col-sm-6 input-column"></div>
	 	                </div>
	 	                <div class="row form-group">
	 	                    <div class="col-sm-4 label-column"><label class="col-form-label" for="rollno">Roll Number</label></div>
	 	                    <div class="col-sm-6 input-column"><input name = "rollno" id ="rollno" class="form-control" type="number" required=""></div>
	 	                </div>
	 	                <div class="row form-group">
	 	                    <div class="col-sm-4 label-column"><label class="col-form-label" for="marks">Sgpa</label></div>
	 	                    <div class="col-sm-6 input-column"><input name="marks" id = "marks" class="form-control" type="number"step="any" required="" pattern="[a-z0-9.%+_]+@moderncoe.edu.in"  title="Please enter the email with domain moderncoe.edu.in">
						</div>
					
	 	                </div>
	 	                <div class="row form-group">
	 	                    <div class="col-sm-4 label-column">
	 	                        
	 	
	 	                    
	 	                </div>
	 	                    
	 	                    
	 	                <!-- </div><a class="btn btn-light submit-button" role="button">Submit</a> -->
						 </div>
						 <button type="submit" class="btn btn-light submit-button" >Submit</button>
						 
	 	            </form>
	 	        </div>
	 	    </div>
	 	    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
	 	</body>
	 	
	 	</html>

