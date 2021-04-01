<?php 
    $conn = pg_connect("host=ec2-18-204-74-74.compute-1.amazonaws.com dbname=ddcul1krvca7nt user=rrazuzxslncjlg password=bb9362cb79376fa38b5d90c020c36dfd99c0184b4eb82f4405353190588f52b9 port=5432");

    if(!conn){
      echo("Kết nối không thành công");
    }
    else{
        echo("Kết nối thành công");
    }

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
        header('Location:chucmung.php');


      }else{
         echo '\n login status : false';
     }
?>
<title>Demo</title>
<form action="index.php" method="post">
  <div class="container">
    <label for="username"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" required>

    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>

    <button type="submit">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</form>
