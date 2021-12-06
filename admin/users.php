<?php 

	include "../lib/php/functions.php";

	$users = file_get_json("../data/users.json");







function showUserPage($user){

$classes = implode(", ", $user->classes);

//heredoc
	echo <<<HTML
	<nav class="nav nav-crumbs">
		<ul class="display-flex">
			<div class="flex-none">
				<li><a href="admin/users.php"><img src="icon/arrow_left.png">Back to list</a></li>
			</div>
			<div class="flex-stretch"><h4>View/edit</h4></div>
			
			<nav class="flex-none nav">
				<ul class="display-flex">
					<li><a href="admin/users.php">Delete</a></li>

				</ul>
			</nav>
			
		</ul>
	</nav>
	<div>
		<h2>$user->name</h2>
		<div>
			<strong>Type</strong>
			<span>$user->type</span>
		</div>
		<div>
			<strong>Email</strong>
			<span>$user->email</span>
		</div>
		<div>
			<strong>Classes</strong>
			<span>$classes</span>
		</div>
	</div>
	HTML;
}




 ?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	
	<title>User Admin Page</title>
	<?php include "../parts/meta_userlist.php"; ?>
</head>
<body>
	
	<header class="navbar">
		<div class="container display-flex">
			<div class="flex-none">
				<h1>User Admin</h1>
			</div>
			<div class="flex-stretch"></div>
			
			<nav class="flex-none nav">
				<ul class="display-flex">
					<li><a href="admin/users.php">User List</a></li>

				</ul>
			</nav>
		</div>
	</header>


	

	<div class="container" id="userlist">
		<div class="display-flex">
			<div class="flex-none">
				<h2>User List</h2>
			</div>
			<div class="flex-stretch"></div>
			
			<nav class="flex-none nav">
				<ul class="display-flex">
					<li><img class="icon" src="icon/add.png"><a href="admin/users.php">Add user</a></li>
				</ul>
			</nav>
		</div>
		<div class="card">
			<?php

		if(isset($_GET['id'])){
			showUserPage($users[$_GET['id']]);
		}	else{

		

		?>

			<?php 

				for($i=0; $i<count($users); $i++){
					echo "<li>
							<div>
								<a href='admin/users.php?id=$i'>".($i+1).". {$users[$i]->name}</a>
							</div>
							<div></div>
							
							<nav>
								<div>
									<div><a href='admin/users.php?id=$i'>View/edit</a></div>
									<span><a href='admin/users.php?id=$i'>Delete</a></span>
								</div>
							</nav>
				</li>";
				}
				
		

			?>

			<?php
		}
			?>
		</div>
	</div>

</body>
</html>