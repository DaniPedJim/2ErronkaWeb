<!DOCTYPE html>
<html lang="eu">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berriak - Berritech</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

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


    <main id="berriak">
        <section class="berriak-container">
            <h1>Azken Berriak</h1>
            <p class="intro">
                Hona hemen Berritech enpresako azken berriak eta nobedadeak.
                Teknologia, berrikuntza eta gure produktuei buruzko informazio eguneratua aurkituko duzu hemen.
            </p>

            <article class="berria">
                <img src="irudiak/birriak1.jpeg" alt="Berria 2 irudia">
                <div class="berria-edukia">
                    <h2>Berritech Donostia Tech Forum-en parte hartu du</h2>
                    <p class="data">2025eko otsailak 5</p>
                    <p>Gure taldeak Donostia Tech Forum-en parte hartu du,
                        non adimen artifizialaren etorkizunaz eta jasangarritasun teknologikoez hitz egin dugu.</p>
                    <a href="#" class="irakurri-gehiago">Irakurri gehiago</a>
                </div>
            </article>

            <article class="berria">
                <img src="irudiak/berriak2.png" alt="Berria 2 irudia">
                <div class="berria-edukia">
                    <h2>Berritech Donostia Tech Forum-en parte hartu du</h2>
                    <p class="data">2025eko otsailak 5</p>
                    <p>Gure taldeak Donostia Tech Forum-en parte hartu du,
                        non adimen artifizialaren etorkizunaz eta jasangarritasun teknologikoez hitz egin dugu.</p>
                    <a href="#" class="irakurri-gehiago">Irakurri gehiago</a>
                </div>
            </article>

            <article class="berria">
                <img src="irudiak/berriak3.jpg" alt="Berria 3 irudia">
                <div class="berria-edukia">
                    <h2>Langile berriak gure taldera batu dira</h2>
                    <p class="data">2025eko martxoak 20</p>
                    <p>Gure taldea handitzen doa!
                        Aurten bost profesional berri gehitu dira gure I+G sailean,
                        berrikuntza teknologikoa indartzeko helburuarekin.</p>
                    <a href="#" class="irakurri-gehiago">Irakurri gehiago</a>
                </div>
            </article>

        </section>
    </main>


    <footer>
        <p>&copy; 2025 Berritech. Eskubide guztiak erreserbatuta.</p>
        <p>Emaila: info@berritech.com | Tel: +34 600 123 456</p>
        <p>Helbidea: Kale Nagusia 12, Donostia, Euskadi</p>
        <div class="redes">
            <a href="https://instagram.com" target="_blank">Instagram</a>
            <a href="https://facebook.com" target="_blank">Facebook</a>
            <a href="https://twitter.com" target="_blank">X</a>
        </div>
    </footer>

</body>

</html>