<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">

    <title>LOGIN</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">


    <link rel="stylesheet" type="text/css" href="style.css">
    
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"><link rel="stylesheet" href="./style.css">
</head>

<body>

    
    <form action="login.php" method="post">
        
        
        <?php if (isset($_GET['error'])) { ?>
            
         <p class="error"><?php echo $_GET['error']; ?></p>
            
        <?php } ?>
            
<div class="box-form">
    <div class="left">
            <div class="overlay">
                    <h1>Student Database  </h1>
                    <br><br><br><br><br><br><br><br>
                    <p>  
                       Welcome to Student Databasae Management System.  <br>
                       Here we track academic records of students
                    </p>
            </div>
    </div>

    <div class="right">
             <h2>LOGIN</h2>
            <!-- <label>User Name</label> -->
        
		<div class="inputs">
              <input type="text" name="uname" placeholder="User Name"><br>

        <!-- <label>Password</label> -->
              <input type="password" name="password" placeholder="Password"><br> 
        </div>
         <br><br>
        <button type="submit">Login</button>

    
    </div>
</div>
     </form>

</body>

</html>

