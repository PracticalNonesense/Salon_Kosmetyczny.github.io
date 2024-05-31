<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salon Kosmetyczny PIĘKNOŚĆ</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="logowanie.css">
</head>
<body>
    <header id="top">
        <div class="logo">
            <a href="index.html"><img src="logo.png" alt="Logo Salonu Kosmetycznego PIĘKNOŚĆ"></a>
        </div>
        <nav>
            <ul>
                <a href="index.html"><li>Home</li></a>
                <a href="onas.html"><li>O nas</li></a>
                <a href="uslugi.html"><li>Usługi</li></a>
                <a href="cennik.html"><li>Cennik</li></a>
                <a href="kontakt.html"><li>Kontakt</li></a>
	    </ul>
        </nav>
    </header>
    <div class="linia"></div>
    <br />
	<section class="form">
        <h2>Zaloguj się!</h2>
        <form method="post">
		<br />
		<br />
            <label for="email">Email:</label>
			<br />
            <input type="text" class="email" name="email" required>
			<br />
			<br />
            <label for="haslo">Hasło:</label>
			<br />
            <input type="password" class="haslo" name="haslo" required>
			<br />
			<br />
            <button type="submit" class="submit" >Logowanie</button>
        </form>
		<?php
session_start();
require 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['haslo'];

 $stmt = $conn->prepare("SELECT haslo FROM dane_logowania WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($hashed_password);
        $stmt->fetch();

        if (password_verify($password, $hashed_password)) {
            $_SESSION['email'] = $email;
            header("Location: index.php");
            exit();
        } else {
            $error = "Nieprawidłowe hasło.";
        }
    } else {
        $error = "Nie znaleziono użytkownika o podanym adresie email.";
    }
    $stmt->close();
}
?>
        </section>
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
