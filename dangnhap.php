<?php 
    $servername = "ec2-18-204-74-74.compute-1.amazonaws.com";
    $username = "rrazuzxslncjlg";
    $password = "bb9362cb79376fa38b5d90c020c36dfd99c0184b4eb82f4405353190588f52b9";
    $database = "ddcul1krvca7nt";

    $conn = mysqli_connect($servername, $username, $password, $database);

    if(!conn){
      echo("Kết nối không thành công");
    }
    else{
        echo("Kết nối thành công");
    }

    $taikhoan = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM account where username = '$taikhoan' and password ='$password'";

    $rs = mysqli_query($conn, $sql);

    if (mysqli_num_rows($rs) > 0){
      echo "Dang nhap thanh cong";
    }
    else{
      echo "Dang nhap that bai"

      require_once 'index.php';
    }
?>