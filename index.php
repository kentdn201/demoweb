<?php 
    $servername = "ec2-18-204-74-74.compute-1.amazonaws.com";
    $username = "rrazuzxslncjlg";
    $password = "bb9362cb79376fa38b5d90c020c36dfd99c0184b4eb82f4405353190588f52b9";
    $database = "ddcul1krvca7nt";

    $conn = pg_connect("host=ec2-18-204-74-74.compute-1.amazonaws.com dbname=ddcul1krvca7nt user=rrazuzxslncjlg password=bb9362cb79376fa38b5d90c020c36dfd99c0184b4eb82f4405353190588f52b9 port=5432");

    if(!conn){
      echo("Kết nối không thành công");
    }
    else{
        echo("Kết nối thành công");
    }
?>

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

<?php
  $taikhoan = $_POST['username'];
  $password = $_POST['password'];

  $sql = "SELECT * FROM account where username = '$taikhoan' and password ='$password'";

  $rs = mysqli_query($conn, $sql);

  if (mysqli_num_rows($rs) > 0){
    echo "Dang nhap thanh cong";
  }
  else{
    echo "Dang nhap that bai";
  }
?>
