<?php	 
 $conn = pg_connect("host=ec2-23-22-191-232.compute-1.amazonaws.com dbname=ddpnh3fllikoh9 user=qlacuryvjwfagg password=2b902a01a3f536a9bc5398855594f01f3b6932ee4df7906b980e69d3726c4715 port=5432");
  	if($conn){echo 'status : connected';}
 if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$username = $_POST['username'];
 	$password = $_POST['password'];
 	$sql="SELECT * FROM account WHERE user_name ='$username' and pass='$password'";
	$result = pg_query($conn, $sql);
if (!$result) {
  echo "An error occurred.\n";
  exit;
}
while ($row = pg_fetch_row($result)) {
  echo "name: $row[1]  pass: $row[2]";
  echo "<br />\n";
}
echo 'heloo';
  }else{
	 echo ' login status : false';
 }
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
   <!--Made with love by Mutiullah Samim -->
   <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<!--Custom styles-->
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
	<div class="container">
		<div class="card">
			<h3>Sign In</h3>
		</div>
		<form method="POST">
		<div class="card-body">
			<label>username</label>
			<input type="text" name="username">
			<label>password</label>
			<input type="password" name="password">
			<input type="submit" value="login">
		</div>
		</form>
	</div>
</body>
</html>
