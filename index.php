<?php 

?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salon Kosmetyczny PIĘKNOŚĆ</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
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
        <div class="baner">
            <h1><strong>Salon Kosmetyczny PIĘKNOŚĆ</strong></h1>
            <img src='baner.png' alt='baner'>
        </div>
        <div class="linia"></div>
    <br> <br>
    <div class='corobi'>
        <div class='serv'>
            <img src='https://cdn-icons-png.flaticon.com/512/5666/5666985.png' alt='makeup' class='pier' name='pier' id='pier'/>
            <p> <strong>Profesjosnalny makijaż </strong></p>
        </div>
        <div class='serv'>
            <img src='https://static.thenounproject.com/png/3914974-200.png' name='dru' id='dru'/>
            <p><strong> Zabiegi oczyszczające</strong></p>
        </div>
        <div class='serv'>
            <img src='https://cdn-icons-png.flaticon.com/512/6187/6187141.png' name='trze' id='trze'/>
            <p class="reg"><strong> Ragulacja brwi </strong><p>
        </div>
    </div>
    <br />
    <br />
    <div class="linia"></div>
    <br />
    <h2> Galeria zdjęć</h2>
    <div id="galeria" class="carousel slide" data-ride="carousel">
        <ul class="carousel-indicators">
            <li data-target="#galeria" data-slide-to="0" class="active"></li>
            <li data-target="#galeria" data-slide-to="1"></li>
            <li data-target="#galeria" data-slide-to="2"></li>
        </ul>

        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://activeshop.com.pl/media/magefan_blog/jak-urzadzic-maly-salon-kosmetyczny.jpeg" alt="Slide 1">
            </div>
            <div class="carousel-item">
                <img src="https://trendy.allani.pl/wp-content/uploads/2021/10/zabiegi-kosmetyczne-na-jesien%CC%81-825x550.jpg" alt="Slide 2">
            </div>
            <div class="carousel-item">
                <img src="https://d2yvmenv39glx3.cloudfront.net/images/f-47489-czym-sie-zajmuje-salon-kosmetyczny.jpg" alt="Slide 3">
            </div>
        </div>

        <a class="carousel-control-prev" href="#galeria" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#galeria" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
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
