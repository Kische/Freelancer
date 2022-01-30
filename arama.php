<?php 


session_start();


$meslek = $_POST['meslek'];
$tecrube = $_POST['tecrube'];
$alan = $_POST['alan'];



$servername = "localhost";
$username = "root";
$password = "";
$dbname = "freelancer";

$conn = new mysqli($servername, $username, $password, $dbname);
$conn->set_charset("utf8");	

$sql = "SELECT * FROM register WHERE job='$meslek' AND experience='$tecrube' AND special='$alan'" ;

$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

	if(mysqli_num_rows($result) === 1)  {
    $_SESSION["fname"] = $row['fname'];
    $_SESSION["lname"] = $row['lname'];
	$_SESSION["mail"] = $row['mail'];
    $_SESSION["bday"] = $row['bday'];
    $_SESSION["gender"] = $row['gender'];
	$_SESSION["job"] = $row['job'];
    $_SESSION["experience"] = $row['experience'];
    $_SESSION["special"] = $row['special'];
	
	$yazi = 'Kayıt Bulundu';
	echo "<SCRIPT> 
			  alert('$yazi');
	          window.location.replace('after_table.php');
		  </SCRIPT>";
		  exit();
	}
	else{
		$yazi1 = 'Kayıt Bulunamadi';
		echo "<SCRIPT> 	  
			  alert('$yazi1');			
	          window.location.replace('tablo.php');
		  </SCRIPT>";
				
     exit();
	}
	
	 
				
     

	
	
    



?>