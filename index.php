<!DOCTYPE html>
<html lang="eu">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sarrera</title>
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
    <section id="sarrera">
        <div class="irudia">
            <img src="irudiak/1.jpg" alt="Irudi 1">
        </div>
        <div class="irudia">
            <img src="irudiak/gu2.jpeg" alt="Irudi 2">
        </div>

        <div class="informazioa">
            <h2>Ongi etorri gure webgunera!</h2>
            <p>
                Gure webgunean aurkituko dituzu azken berriak, informazio erabilgarria eta gure jardueren berri osoa.
                Gure helburua da bisitariei kalitatezko edukia eskaintzea eta zure interesak asetzea.
            </p>

            <h3>Nor gara?</h3>
            <p>
                Enpresa dinamiko eta berritzaile bat gara, teknologia, zerbitzu digitalak eta komunitatearen
                garapena uztartzen dituena. Gure lantaldea profesional anitzek osatzen dute, esperientzia handia dutenak
                sektore desberdinetan. Hori dela eta, gure bezeroei soluzio eraginkorrak eskaintzen dizkiegu.
            </p>

            <h3>Zer eskaintzen dugu?</h3>
            <p>
                Gure produktuak eta zerbitzuak zure beharretara egokitzen dira: online ikastaroak, jarduera
                espezializatuak
                eta komunitate ekitaldiak. Helburua da zure ikaskuntza, esperientzia eta harremanak hobetzea.
            </p>

            <h3>Zuretzat sortua</h3>
            <p>
                Ez galdu gure albiste eta ekitaldi bereziak! Parte hartu gure komunitatean eta ezagutu azken
                berrikuntzak.
                Zure iritzia oso garrantzitsua da guretzat, eta zurekin batera haztea da gure erronka nagusia.
            </p>

            <h3>GURE LORPENAK</h3>
            <p>Urte hauetan zehar gure enpresak hainbat lorpen garrantzitsu lortu ditu:</p>
            <ul>
                <li>2023an, gure enpresak “Tokiko Berrikuntza Saria” jaso zuen gure proiektu digital berritzaileengatik.
                </li>
                <li>15 herrialdetan baino gehiagotan bezeroekin lan egin dugu azken bost urteetan.</li>
                <li>2024an, gure lantaldeak 10 aplikazio berritzaile sortu zituen, erabiltzaileen beharrak asetzeko.
                </li>
                <li>50 enpresa lagun eta bazkidek baino gehiagok parte hartzen dute gure ekimenetan.</li>
                <li>Gure zerbitzuek %40ko hazkundea izan dute azken urtean, gure bezeroen konfiantzari esker.</li>
            </ul>

            
        </div>

        <!-- BERRIAK -->
        <aside class="berriak">
            <h2>BERRIAK</h2>
            <ul>
                <li><a href="berriak.html">Udaberriko jarduera berriak martxan dira</a></li>
                <li><a href="berriak.html">Online ikastaro berriak eskuragarri</a></li>
                <li><a href="berriak.html">Gure komunitateko ekitaldi nagusiak</a></li>
            </ul>
        </aside>

        <!-- IRITZIAK / FEEDBACK -->
        <section id="feedback" class="informazioa">
            <h2>Zure iritzia garrantzitsua da!</h2>
            <p>Mesedez, utzi zure iritzia edo proposamenak gure lana hobetzen jarraitzeko.</p>

            <form method="post">
                <label for="izena">Zure emaila:</label>
                <input type="text" id="emaila" name="emaila" placeholder="Idatzi zure emaila" required>

                <label for="mezua">Zure mezua:</label>
                <textarea id="mezua" name="mezua" rows="5" placeholder="Idatzi hemen zure iritzia..."
                    required></textarea>

                <button type="submit">Bidali</button>
            </form>
        </section>

    </section>

    <!-- ORRI-OINA -->
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