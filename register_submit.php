<?php
include 'config.php';
		if( isset($_POST["submit"]))
        {
            $password = $_POST["password"];
            $repassword=$_POST["repassword"];
			$username = $_POST["username"];
            if($password != $repassword)
            {
                header("location:register.php");
            }
			$sql ="SELECT * FROM user WHERE username='$username' ";
			$old = mysqli_query($conn,$sql);
			if(mysqli_num_rows($old) > 0){
				header("location:register.php");
			}
			else
            {
                $sql ="INSERT INTO user (username,password) VALUES('$username','$password')";
                mysqli_query($conn,$sql);
                echo"done";
                header("location:login.php");
			}
		}else{
            header("location:register.php");
        }
?>









