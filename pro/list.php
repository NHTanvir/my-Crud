<?php include('server.php') ?>
<?php $results = mysqli_query($db, "SELECT * FROM users"); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>
<body style=" background: linear-gradient(to right, #2c3e50, #fd746c" >
<h1 class="table-heading">Delete Or Edit Any User  <a href="http://localhost/pro/register.php">Register</a></h1>

<table class="styled-table"">
	<thead>
		<tr>
			<th>UserName</th>
			<th>Email</th>
			<th colspan="2">Action</th>
		</tr>
	</thead>
	
	<?php while ($row = mysqli_fetch_array($results)) { ?>
		<tr>
			<td><?php echo $row['username']; ?></td>
			<td><?php echo $row['email']; ?></td>
			<td>
				<a href="update.php?edit=<?php echo $row['id']; ?>" class="edit_btn" ><i class="fas fa-edit" style="color:black;"></i></a>
			</td>
			<td>
			
				<a href="delete.php?del=<?php echo $row['id'];?>  " class="del_btn"><i class="fas fa-times" style="color:black;"></i></a>
					
						
			</td>
		</tr>
	<?php } ?>
</table>
							</body>
							</html>