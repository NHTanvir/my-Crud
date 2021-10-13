<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
           
               <form method="post" action="<?php $_PHP_SELF ?>">

  	                <div class="input-group">
  	                <label>Username</label>
  	                <input type="text" name="uname" >
  	                </div>
  	                <div class="input-group">
  	                <label>Email</label>
  	                <input type="email" name="uemail" >
  	                </div>    
                      <button type="submit" class="btn" name="update" value ="update" id="update">Update</button>   
                </form>    

				<?php 
				if (isset($_GET['edit'])) {
				    $id = $_GET['edit'];
                    
                    if(isset($_POST['uname'])){
						$username = $_POST['uname'];
						$email = $_POST['uemail'];
	
							$sql = mysqli_query($db,"UPDATE `users` SET `username`= '$username', `email`= '$email' WHERE id='$id'");

					}
                   
						                   
    
                 }
if ( isset( $_POST["update"] ) ) { 
	header( "Location: list.php" ); 

}
?> 
</body>
</html>
                