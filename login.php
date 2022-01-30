<?php 

ob_start();
session_start();

$username1 = $_POST['username'];
$password1 = $_POST['password'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "freelancer";

$conn = new mysqli($servername, $username, $password, $dbname);
$conn->set_charset("utf8");



$sql = "SELECT * FROM register WHERE username='$username1' AND password='$password1'" ;

$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

if(mysqli_num_rows($result) === 1)  {

	$_SESSION["username"] = $row['username'];
    $_SESSION["fname"] = $row['fname'];
    $_SESSION["lname"] = $row['lname'];
	$_SESSION["mail"] = $row['mail'];
    $_SESSION["gender"] = $row['gender'];
	$_SESSION["job"] = $row['job'];
    $_SESSION["experience"] = $row['experience'];
    $_SESSION["special"] = $row['special'];
   

    echo "<SCRIPT> 
						
	          window.location.replace('tablo.php');
		  </SCRIPT>";
				
     exit();
	

}

else {

    if($username=="" or $password=="") {
		
        echo "<center>Kullanici Adi/Sifre Yanlis.<br><a href=javascript:history.back(-1)>Geri Don</a></center>";

    }
}

ob_end_flush();

?>