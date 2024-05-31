
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salon Kosmetyczny PIĘKNOŚĆ</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="kontakt.css">
</head>
<body>
		<div class="zalog">
	<h2>Użytkownik zalogowany<h2>
	<button type="submit" style='align-items: center;
  background-image: linear-gradient(135deg, #FFB5DA 40%, #FFCACA);
  border: 0;
  border-radius: 10px;
  box-sizing: border-box;
  color: #fff;
  cursor: pointer;
  display: flex;
  flex-direction: column;
  font-family: "Codec cold",sans-serif;
  font-size: 16px;
  font-weight: 700;
  height: 54px;
  justify-content: center;
  letter-spacing: .4px;
  line-height: 1;
  max-width: 100%;
  text-decoration: none;
  text-transform: uppercase;
  user-select: none;
  margin: 0 0 0 40%;
  -webkit-user-select: none;' onclick="window.location='index.html'">Wyloguj</button>
	</div>
    <header id="top">
        <div class="logo">
            <a href="index.php"><img src="logo.png" alt="Logo Salonu Kosmetycznego PIĘKNOŚĆ"></a>
        </div>
        <nav>
            <ul>
                <a href="index.php"><li>Home</li></a>
                <a href="onas.php"><li>O nas</li></a>
                <a href="uslugi.php"><li>Usługi</li></a>
                <a href="cennik.php"><li>Cennik</li></a>
                <a href="kontakt1.php"><li>Kontakt</li></a>
	    </ul>
        </nav>
    </header>
    <div class="linia"></div>
    <br />
        <section class="form">
        <h2>Dziękujemy za wysłanie widomości!</h2>
		<button type="submit" style='align-items: center;
  background-image: linear-gradient(135deg, #FFB5DA 40%, #FFCACA);
  border: 0;
  border-radius: 10px;
  box-sizing: border-box;
  color: #fff;
  cursor: pointer;
  display: flex;
  flex-direction: column;
  font-family: "Codec cold",sans-serif;
  font-size: 16px;
  font-weight: 700;
  height: 54px;
  justify-content: center;
  letter-spacing: .4px;
  line-height: 1;
  max-width: 100%;
	margin: 0 0 0 40%;
  text-decoration: none;
  text-transform: uppercase;
  user-select: none;
  -webkit-user-select: none;' onclick="window.location='kontakt.html'">Powrót do formularza</button>
  <?php
$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];
 

$host = "localhost";
$dbname = "salon_kosmetyczny";
$username = "root";
$password = "";
        
$conn = mysqli_connect(hostname: $host,
                       username: $username,
                       password: $password,
                       database: $dbname);
        
if (mysqli_connect_errno()) {
    die("Błąd: " . mysqli_connect_error());
}           
        
$sql = "INSERT INTO dane (Imie, Email, Tresc)
        VALUES (?, ?, ?)";

$stmt = mysqli_stmt_init($conn);

if ( ! mysqli_stmt_prepare($stmt, $sql)) {
 
    die(mysqli_error($conn));
}

mysqli_stmt_bind_param($stmt, "sss",
                       $name,
					   $email,
                       $message);

mysqli_stmt_execute($stmt);
  ?>
        </section>
    <br />
	<br />
	<br />
	<br />
	<br />
	<br />
	<br />
	<br />
	<div class= "back">
	<div class="linia"></div>
	<br />
	<h1><strong>Odwiedź nas na naszych social mediach:</strong></h1>
    <footer>
	<a href="https://www.facebook.com/groups/367320846754837" target="_blank"><img src='https://cdn-icons-png.freepik.com/256/2175/2175193.png?semt=ais_hybrid' class='fb'></a>
	<a href="https://www.instagram.com/" target="_blank"><img src='https://www.edigitalagency.com.au/wp-content/uploads/new-Instagram-logo-black-glyph.png'class='insta'></a>
	<a href="https://twitter.com/?lang=pl" target="_blank"><img src='https://freelogopng.com/images/all_img/1690643640twitter-x-icon-png.png' class='x'></a>
	<a href="#top"><img src='https://cdn-icons-png.flaticon.com/512/25/25366.png'class='strzala'></a>
	<div class="linia"></div>
    </footer>
	</div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
