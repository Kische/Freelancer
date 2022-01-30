<?php 
session_start(); 
?>

<!DOCTYPE html>


<html>

<style>
	html,
	body,
	div,
	span,
	object,
	iframe,
	h1,
	h2,
	h3,
	h4,
	h5,
	h6,
	p,
	blockquote,
	pre,
	abbr,
	address,
	cite,
	code,
	del,
	dfn,
	em,
	img,
	ins,
	kbd,
	q,
	samp,
	small,
	strong,
	sub,
	sup,
	var,
	b,
	i,
	dl,
	dt,
	dd,
	ol,
	ul,
	li,
	fieldset,
	form,
	label,
	legend,
	table,
	caption,
	tbody,
	tfoot,
	thead,
	tr,
	th,
	td,
	article,
	aside,
	canvas,
	details,
	figcaption,
	figure,
	footer,
	header,
	hgroup,
	menu,
	nav,
	section,
	summary,
	time,
	mark,
	audio,
	video {
		margin: 0;
		padding: 0;
		border: 0;
		outline: 0;
		font-size: 100%;
		vertical-align: baseline;
		background: transparent;
	}

	body {
		line-height: 1;
	}

	article,
	aside,
	details,
	figcaption,
	figure,
	footer,
	header,
	hgroup,
	menu,
	nav,
	section {
		display: block;
	}

	nav ul {
		list-style: none;
	}

	blockquote,
	q {
		quotes: none;
	}

	blockquote:before,
	blockquote:after,
	q:before,
	q:after {
		content: '';
		content: none;
	}

	a {
		margin: 0;
		padding: 0;
		font-size: 100%;
		vertical-align: baseline;
		background: transparent;
	}

	/* change colours to suit your needs */
	ins {
		background-color: #ff9;
		color: #000;
		text-decoration: none;
	}

	/* change colours to suit your needs */
	mark {
		background-color: #ff9;
		color: #000;
		font-style: italic;
		font-weight: bold;
	}

	del {
		text-decoration: line-through;
	}

	abbr[title],
	dfn[title] {
		border-bottom: 1px dotted;
		cursor: help;
	}

	table {
		border-collapse: collapse;
		border-spacing: 0;
	}

	/* change border colour to suit your needs */
	hr {
		display: block;
		height: 1px;
		border: 0;
		border-top: 1px solid #cccccc;
		margin: 1em 0;
		padding: 0;
	}

	input,
	select {
		vertical-align: middle;
	}

	body {
		width: 100%;
		height: 600px;
		background-image: url("freelancer.jpg");
		background-position: center;
		background-repeat: no-repeat;
		background-size: cover;
	}
	
	
	.sonuc{
		margin: 125px;
	}
	
	
	table, th, td {
		background-color: #a6c193;
		opacity: 0.8;
		border: 1px solid black;
		font-size: 25px;
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
	
	.a1 {
		font-size: 24px;
		font-family: 'Roboto', sans-serif;
		font-weight: bold;
		text-decoration: none;
		text-align: center;
		color: black;
		margin-left: 400px;
		margin-bottom: 15px;
		margin-top: 15px;
	}
	
	.a2 {
		font-size: 24px;
		font-family: 'Roboto', sans-serif;
		font-weight: bold;
		text-decoration: none;
		text-align: center;
		color: black;
		margin-left: 20px;
		margin-bottom: 15px;
		margin-top: 15px;
	}
	
</style>
	
<head>
	<meta charset="utf-8">
	<title>Freelancer</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Merriweather:ital@1&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Merriweather:ital@1&family=Raleway:wght@100&family=Roboto:ital,wght@1,300&display=swap" rel="stylesheet">
</head>

<body>
	<h1>Freelancer İş ve Çalışan Arama Sitesi
		<a href="tablo.php" class="a1">İş Arama Sayfasına Dön</a>
		<a href="logout.php" class="a2">Çıkış Yap</a>
	</h1>
	
		<div class="sonuc">
			<table style="width:100%">
			  <tr>
				<th>İsim</th>
				<th>Soyisim</th>
				<th>Cinsiyet</th>
				<th>E-Mail</th>
				<th>Doğum Tarihi</th>
				<th>Meslek</th>
				<th>Tecrübe</th>
				<th>Özel Alan</th>
				
			  </tr>
			  <tr>
				<td><?php echo $_SESSION['fname']; ?></td>
				<td><?php echo $_SESSION['lname']; ?></td>
				<td><?php echo $_SESSION['gender']; ?></td>
				<td><?php echo $_SESSION['mail']; ?></td>
				<td><?php echo $_SESSION['bday']; ?></td>
				<td><?php echo $_SESSION['job']; ?></td>
				<td><?php echo $_SESSION['experience']; ?></td>
				<td><?php echo $_SESSION['special']; ?></td>
				
				
				
				
			  </tr>
			  
			</table>
		</div>
</body>


</html>
