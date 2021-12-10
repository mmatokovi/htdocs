<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="stil.css">
    <title>IMAVES</title>
    <link rel="icon" type="image/png" href="img/imaves_logo.png">
    <script src="https://kit.fontawesome.com/b652bec72b.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
<?php include "zaglavlje.php" ?>
<div class="sadrzaj">
    <section id="kontakt"  class="fadeInDown" style="padding-top:70px;">
        <a href="mailto:info@imaves.hr"><i class="fa fa-envelope"></i>&nbsp;<span class="hidden-xxs">info@imaves.hr</span></a>
        <div style="float:right">
            <a href="https://www.linkedin.com/companies/imaves-d-o-o-" target="_blank"><i class="fab fa-linkedin"></i>&nbsp;<span class="hidden-xxs">LinkedIn</span></a>
            <a href="https://facebook.com" target="_blank"><i class="fab fa-facebook"></i>&nbsp;<span class="hidden-xxs" style="padding-right:3px;">Facebook</span></a>
        </div>
        <noscript style="color:#ffda64; text-align:center; text-decoration:underline;"><p>Sorry, your browser does not support JavaScript!</p></noscript>
    </section>
    <section>
        <div class="slideshow-container fadeInDown">
        <div class="mySlides">
            <img src="img/Homepage-background.png" class="slide">
            <div class="podnaslov fadeInDown">
                <h1>4me</h1>
                <p>Integracija i upravljanje uslugama</p>
                <a class="button b_narandasta button-icon button-icon-right" href="4me.php">Saznaj Više</a>
            </div>
            <img src="img/4me-logo.png" class="slide_pic fadeInDown">
        </div>
        <div class="mySlides">
            <img src="img/Homepage-background.png" class="slide">
            <div class="podnaslov fadeInDown">
                <h1>BMC Software</h1>
                <p>Digitalna usluga</p>
                <a class="button b_narandasta button-icon button-icon-right" href="bmc.php">Saznaj Više</a>
            </div>
            <img src="img/bmc-logo.png" class="slide_pic fadeInDown">
        </div>
        <div class="mySlides">
            <img src="img/Homepage-background.png" class="slide">
            <div class="podnaslov fadeInDown">
                <h1>PriceFx</h1>
                <p>Upravljanje cijenama</p>
                <a class="button b_narandasta button-icon button-icon-right" href="pricefx.php">Saznaj Više</a>
            </div>
            <img src="img/PriceFx-logo.png" class="slide_pic fadeInDown">
        </div>
        <div class="mySlides">
            <img src="img/Homepage-background.png" class="slide">
            <div class="podnaslov fadeInDown">
                <h1>Pantheon</h1>
                <p>IMAVES proizvodi po narudžbi</p>
                <a class="button b_narandasta button-icon button-icon-right" href="pantheon.php">Saznaj Više</a>
            </div>
            <img src="img/Pantheon-2x.png" class="slide_pic fadeInDown">
        </div>
        <div class="mySlides">
            <img src="img/Homepage-background.png" class="slide">
            <div class="podnaslov fadeInDown">
                <h1>Razvoj</h1>
                <p>IMAVES proizvodi po narudžbi</p>
                <a class="button b_narandasta button-icon button-icon-right" href="razvoj.php">Saznaj Više</a>
            </div>
        </div>
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        <div class="dots">
            <span class="dot" onclick="currentSlide(1)"></span> 
            <span class="dot" onclick="currentSlide(2)"></span> 
            <span class="dot" onclick="currentSlide(3)"></span>  
            <span class="dot" onclick="currentSlide(4)"></span>  
            <span class="dot" onclick="currentSlide(5)"></span>  
        </div>
    </div>
    </section>
    <section>
        <div class="table fadeInDown" style="padding-top:44px;">
        <h2 style="text-align: left;">IMAVES se bavi projektiranjem, uvođenjem, nadzorom i integracijom digitalnih rješenja i približavanju IT tehnologije krajnjim korisnicima.
        <br><br>
        Osnovna misija nam je savjetovanje pri odabiru rješenja koje najbolje odgovara Vašim zahtjevima.</h2>
        <br>
        <ul class="usluge">
            <li>
                <a href="tvrtka.html" class="usluga" style="height: 298px;">
                    <span class="ikona" style="background-image: url(img/about-us-1.png);"></span>
                    <h4 class="title">PROJEKTIRANJE</h4>
                    <p>Izrada osnovnog tehničkog plana na osnovu postojeće IT konfiguracije korisnika.</p>
                </a>
            </li>
            <li>
                <a href="tvrtka.html" class="usluga" style="height: 298px;">
                    <span class="ikona" style="background-image: url(img/about-us-2.png);"></span>
                    <h4 class="title">DETALJNA ANALIZA</h4>
                    <p>Izrada detaljnog tehničkog plana zasnovanog na potrebama i zahtjevima korisnika.</p>
                </a>
            </li>
            <li>
                <a href="tvrtka.html" class="usluga" style="height: 298px;">
                    <span class="ikona" style="background-image: url(img/about-us-3.png);"></span>
                    <h4 class="title">INSTALACIJA</h4>
                    <p>Instaliranje i ugađanje programskih proizvoda.</p>
                </a>
            </li>
            <li>
                <a href="tvrtka.html" class="usluga" style="height: 298px;">
                    <span class="ikona" style="background-image: url(img/about-us-4.png);"></span>
                    <h4 class="title">RAZVOJ I PRILAGODBA</h4>
                    <p>Razvoj, prilagodba i promjena programskih proizvoda prema potrebama korisnika.</p>
                </a>
            </li>
            <li>
                <a href="tvrtka.html" class="usluga" style="height: 298px;">
                    <span class="ikona" style="background-image: url(img/about-us-5.png);"></span>
                    <h4 class="title">NADZOR</h4>
                    <p>Pregled rada, održavanje programskih proizvoda i prilagodba novim korisničkim zahtjevima.</p>
                </a>
            </li>
            </ul>
            </div>
    </section>
    <section>
        <h2 style="text-align: center;">Upravo to je ono što vam treba?<a href="kontakt.php" class="b_crevena"> Kontaktirajte nas.</a></h2>
    </section>
<?php include "podnozje.php" ?>
<script src="config.js"></script>
<script src="js/slide.js"></script>
</body>
</html>
