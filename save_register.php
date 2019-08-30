<?php
	include "conn.php";
    
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];
	
    $sql = $conn->prepare("SELECT * FROM [login] WHERE username = :user");
    $sql->bindParam(':user',$username);
    $sql->execute();
    $rs = $sql->fetch(PDO::FETCH_ASSOC);
	if($rs)
	{
			
	}
	else
	{	
		
		$sqli = "INSERT INTO [login] (Username,Password,email) VALUES ('".$username."', 
		'".$password."','".$email."')";
		$sqlin = $conn->query($sqli);
		
		echo "Register Completed!<br>";		
	
		echo "<br> Go to <a href='login.php'>Login page</a>";
		
	}

?>