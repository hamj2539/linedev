<?php
    include 'conn.php';

	session_start();
	$user = $_POST ['InputUser'];
    $password = $_POST['InputPassword'];
	$sqlc = $conn->prepare("SELECT id FROM [login] WHERE username=:user and Password=:pass");
    $sqlc->bindParam(':user',$user);
    $sqlc->bindParam(':pass',$password);
    $sqlc->execute();
    $rs = $sqlc->fetch(PDO::FETCH_ASSOC);
	print_r($rs);
	
	if(!$rs)
	{
			echo "Username and Password Incorrect!";
	}
	else
	{
			$_SESSION["id"] = $rs["id"];

			session_write_close();
            
            header("location:home.php");
	}
?>