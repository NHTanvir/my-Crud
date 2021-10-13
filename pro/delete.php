<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php 
				if (isset($_GET['del'])) {
				    $id = $_GET['del'];
					mysqli_query($db, "DELETE FROM users WHERE id=$id");
                    ?>
                     <p>The user have been Deleted</P>
                    <p>wanna Back to list? Just click below</P>
                    <br/>
                    
                    
                     <a href="http://localhost/pro/list.php">LIST</a>
                      

						
								<?php }   ?>
                                </body>
</html>
          