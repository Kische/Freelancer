<!DOCTYPE html>
<html>
<style media="screen">
  body {
    width: 100%;
    height: 1400px;
	background-image: url("freelancer.jpg");
	background-position: center;
	background-repeat: no-repeat;
	background-size: cover;
	background-clip: border-box;
  }

  .kayit {
	float: left;
    width: 40%;
    height: 950px;
    background-color: white;
    opacity: 0.8;
    border: 3px solid black;
    border-radius: 5px;
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.19), 0 6px 6px rgba(0, 0, 0, 0.23);
    padding: 50px;
	margin-left: 25px;
  }
  
  .giris{
	float: left;
    width: 40%;
    height: 550px;
    background-color: white;
    opacity: 0.8;
    border: 3px solid black;
    border-radius: 5px;
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.19), 0 6px 6px rgba(0, 0, 0, 0.23);
    padding: 50px;
	margin-left: 50px;
  }
  
  .giris p{
	font-size: 24px;
	font-weight: 500;
  }  
  
  label{
	  font-weight: 600;
	  font-size: 20px;
  }
  
  textarea{
	  box-sizing: border-box;
	  border: 2px solid #ccc;
	  border-radius: 4px;
	  background-color: #f8f8f8;
	  font-size: 20px;
	  resize: none;
  }

  input{
	  margin-left: 5px;
  }
  .special{
	  width: 250px;
  }
  
  h1 {
	font-family: 'Merriweather', serif;
	margin: 25px;
	margin-bottom: 50px;
	padding: 15px;
	font-size: 36px;
	color: (#334d4d);
	background-color: #a6c193;
	opacity: 0.75;
	}
	
  a {
	font-size: 24px;
	font-family: 'Roboto', sans-serif;
	font-weight: bold;
	text-decoration: none;
	text-align: center;
	color: black;
	margin-left: 550px;
	margin-bottom: 15px;
	margin-top: 15px;
	}

  hr {
	  margin: 40px;
  }
	
  p {
	text-align: justify;
	font-weight: bold;
  }
</style>

<head>
  <meta charset="utf-8">
  <title>Başvur veya Giriş Yap</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Merriweather:ital@1&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Merriweather:ital@1&family=Raleway:wght@100&family=Roboto:ital,wght@1,300&display=swap" rel="stylesheet">

</head>

<body>
	<h1>Freelancer İş ve Çalışan Arama Sitesi
		<a href="index.php">Ana Sayfaya Git</a>
	</h1>
	
  <div class="kayit">
    <form action="application.php" method="post">
		
	  <h2>KAYIT OL</h2>
	   
	  <label for="username">Kullanıcı Adı:</label>
      <input type="text" id="username" name="username" required><br>
      <br><br>

	  <label for="password">Şifre:</label>
      <input type="text" id="password" name="password" required><br>
      <br><br>	
      
	  
	  <label for="isim">İsim:</label>
      <input type="text" id="isim" name="isim" required><br>
      <br><br>

      <label for="soyisim">Soyisim:</label>
      <input type="text" id="soyisim" name="soyisim" required><br>
      <br><br>

      <label for="mail">E-mail:</label>
      <input type="text" id="mail" name="mail" required><br>
      <br><br>

      <label for="bday">Doğum Tarihi:</label>
      <input type="date" id="bday" name="bday" required><br>
      <br><br>

      <label for="cinsiyet">Cinsiyet:</label><br>
      <input type="radio" id="cinsiyet" name="cinsiyet" value="Erkek" checked="on">
      <span>Erkek</span><br>
      <input type="radio" id="cinsiyet" name="cinsiyet" value="Kadin">
      <span>Kadın</span><br>
      <br><br>

      <label for="meslek">Mesleğiniz:</label><br><br>
      <select id="meslek" name="meslek">
        <option value="Öğretmen">Öğretmen</option>
        <option value="Çevirmen">Çevirmen</option>
        <option value="Ressam">Ressam</option>
		<option value="Yazılımcı">Yazılımcı</option>
		<option value="Editör">Editör</option>

      </select>
      <br><br>

      <label for="tecrube">Tecrübeniz:</label><br><br>
      <select id="tecrube" name="tecrube">
        <option value="Amatör">Amatör</option>
        <option value="Orta-Seviye">Orta Seviye</option>
        <option value="Profesyonel">Profesyonel</option>

      </select>
      <br><br>
      <hr>
      <br>
	  
	  <label for="speacial">Özelleştiğiniz Alanı Belirtin:</label>
      <input class ="special" type="text" id="special" name="special" required placeholder="Karakalem, Spor Gazeteleri, C++ vb..."><br>
      <br><br>



  
      <input type="submit" value="Kayıt Ol">
      <input type="reset" value="Temizle">

    </form>
  </div>
  
  <div class="giris">
    <form action="login.php" method="post">
		
	  <h2>GİRİŞ YAP</h2>
	   
	  <label for="username">Kullanıcı Adı:</label>
      <input type="text" id="username" name="username" required><br>
      <br><br>

	  <label for="password">Şifre:</label>
      <input type="password" id="password" name="password" required><br>
      <br><br>	
      
	 
      <br><br>
      <input type="submit" value="Giriş Yap">
      <input type="reset" value="Temizle">

    </form>
	<hr>
	<p>Siteyi gezmek veya sitede yapılmış içeriklere göz atmak için kayıtlı hesabınız olmasına gerek yoktur. Ancak amacınız
	siteyi kullanarak kendinize iş bulmak ise kayıt olmak zorundasınız. Kayıt esnasında verdiğiniz bilgiler çevrimiçi olarak anlaşabileceği
	çalışan arayan kişilerin doğru kişilerle birlikte iş yapılabilmesi için kullanılacaktır. Vermiş olduğunuz e-posta üzerinden iş verenler sizinle 
	iletişime geçecektir.
	</p> 
	
  </div>

</body>

</html>
