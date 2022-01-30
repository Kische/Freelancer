<?php


$username1 = $_POST['username'];
$password1 = $_POST['password'];
$isim = $_POST['isim'];
$soyisim = $_POST['soyisim'];
$cinsiyet = $_POST['cinsiyet'];
$dogum_gunu = $_POST['bday'];
$mail = $_POST['mail'];
$meslek = $_POST['meslek'];
$tecrube = $_POST['tecrube'];
$alan = $_POST['special'];


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "freelancer";

$conn = new mysqli($servername, $username, $password, $dbname);
$conn->set_charset("utf8");


if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}



$sql = "INSERT INTO register(username, password, fname, lname, mail, bday, gender, job, experience, special)
		VALUES ('$username1', '$password1', '$isim', '$soyisim', '$mail', '$dogum_gunu', '$cinsiyet', '$meslek', '$tecrube', '$alan')";



if ($conn->query($sql) === TRUE) {
	$yazi = 'Kayıt Olundu';
	echo "<SCRIPT> 
			  alert('$yazi');
	          window.location.replace('giris.php');
		  </SCRIPT>";
} 
else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>


