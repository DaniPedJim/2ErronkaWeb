<!DOCTYPE html>
<html lang="eu">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nor Gara</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <!-- MENUA -->
    <header>
        <nav>
            <a class="berritech-btn">
                <img src="irudiak/LogoErronka1.png" alt="Berritech">
            </a>
            <a href="index.html">SARRERA</a>
            <a href="produktuak.html">PRODUKTUAK</a>
            <a href="norgara.html">NOR GARA</a>
            <a href="formularioa.html">FORMULARIOA</a>
            <?php
            require_once "konexioa.php";
            if($_SESSION['izena']==""):?>
                <a href="login.php">LOGIN</a>
            <?php else:?>
                <a href="logout.php">LOGIN OUT</a>
            <?php endif;?>
        </nav>
    </header>

    <!-- EDUKIA -->
    <section id="norgara">
        <h1>NOR GARA</h1>

        <div class="content">
            <div class="testua">
                <h2>Gure Historia</h2>
                <p>
                    Gure enpresa 2010ean sortu zen, teknologia berrien merkatuan berrikuntza
                    eta kalitatea eskaintzeko asmoz. Ordutik, ehunka bezero pozik ditugu
                    eta gure produktu eta zerbitzuen bidez komunitate teknologikoan erreferente bihurtu gara.
                </p>

                <h2>Gure Balioak</h2>
                <ul class="balioak">
                    <li>Berrikuntza</li>
                    <li>Kalitatea</li>
                    <li>Bezeroarentzako arreta</li>
                </ul>
            </div>

            <div class="irudia">
                <img src="irudiak/gu.jpg" alt="Gure taldea">
            </div>
        </div>

        <div class="maps">
            <h2>Aurki gaitzazu hemen</h2>
            <iframe src="https://www.google.com/maps?q=Arranomendia+2+20240+Ordizia+Gipuzkoa&hl=es&z=16&output=embed"
                width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>

    </section>


    <!-- FOOTER -->
    <footer>
        <p>&copy; 2025 Enpresa Izena. Eskubide guztiak erreserbatuta.</p>
        <p>Emaila: info@enpresa.com | Tel: +34 600 123 456</p>
        <p>Helbidea: Kale Nagusia 12, Donostia, Euskadi</p>
        <p>
        <div class="redes">
            <a href="https://instagram.com" target="_blank">Instagram</a>
            <a href="https://facebook.com" target="_blank">Facebook</a>
            <a href="https://twitter.com" target="_blank">X</a>
        </div>
        </p>
    </footer>

</body>

</html>