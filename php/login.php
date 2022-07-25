<?php
	session_start();
 
	require_once 'conexionPDO.php';
 
	if(ISSET($_POST['login'])){
		if($_POST['email'] != "" || $_POST['pass1'] != ""){
            $email =trim( $_POST['email']);
            $pass1 =trim( $_POST['pass1']);
            $sql = $conexion->prepare("CALL usuario(?, ?)");
            //$sql = "SELECT * FROM `member` WHERE `username`=? AND `password`=? ";
			$query = $conexion->prepare($sql);
			$query->execute(array($email,$pass1));
			$row = $query->rowCount();
			$fetch = $query->fetch();
			if($row > 0) {
				$_SESSION['user'] = $fetch['mem_id'];
				header("location: usuarioreg.php");
			} else{
				echo "
				<script>alert('Invalid username or password')</script>
				<script>window.location = 'index.php'</script>
				";
			}
		}else{
			echo "
				<script>alert('Please complete the required field!')</script>
				<script>window.location = 'index.php'</script>
			";
		}
	}
?>