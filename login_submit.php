<?php
include 'config.php';
		if( isset($_POST["submit"]))
        {
            $password = $_POST["password"];
			$username = $_POST["username"];
			$sql ="SELECT * FROM user WHERE username='$username' and password='$password' ";
			$user = mysqli_query($conn,$sql);
			if(mysqli_num_rows($user) > 0){
				echo"done!";
			}
			else
            {
				header("location:login.php");
			}
		}else{
            header("location:login.php");
        }
?>









