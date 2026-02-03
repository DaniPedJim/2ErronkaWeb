<!DOCTYPE html>
<html lang="eu">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produktuak</title>
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

    <!-- EDUKIA -->
    <section id="produktuak">
        <div class="grid">

            <div class="produktu">
                <img src="irudiak/2.jpg" alt="Ordenagailu eramangarria">
                <h3>Ordenagailu eramangarria 15.6"</h3>
                <p>Intel Core i5 • 16GB RAM • 512GB SSD • Windows 11</p>
                <p class="prezioa">Prezioa: 699€</p>
                <button class="erosi">Erosi</button>
            </div>
            <div class="produktu">
                <img src="irudiak/10.jpg" alt="Ordenagailu eramangarria">
                <h3>Ordenagailu eramangarria 15.6"</h3>
                <p>Intel Core i5 • 16GB RAM • 512GB SSD • Windows 11</p>
                <p class="prezioa">Prezioa: 699€</p>
                <button class="erosi">Erosi</button>
            </div>
            <div class="produktu">
                <img src="irudiak/6.jpg" alt="Ordenagailu eramangarria">
                <h3>Ordenagailu eramangarria 15.6"</h3>
                <p>Intel Core i5 • 16GB RAM • 512GB SSD • Windows 11</p>
                <p class="prezioa">Prezioa: 699€</p>
                <button class="erosi">Erosi</button>
            </div>
            <div class="produktu">
                <img src="irudiak/7.jpg" alt="Ordenagailu eramangarria">
                <h3>Ordenagailu eramangarria 15.6"</h3>
                <p>Intel Core i5 • 16GB RAM • 512GB SSD • Windows 11</p>
                <p class="prezioa">Prezioa: 699€</p>
                <button class="erosi">Erosi</button>
            </div>
            <div class="produktu">
                <img src="irudiak/8.jpg" alt="Ordenagailu eramangarria">
                <h3>Ordenagailu eramangarria 15.6"</h3>
                <p>Intel Core i5 • 16GB RAM • 512GB SSD • Windows 11</p>
                <p class="prezioa">Prezioa: 699€</p>
                <button class="erosi">Erosi</button>
            </div>

            <div class="produktu">
                <img src="irudiak/9.jpg" alt="Ordenagailu eramangarria">
                <h3>UltraBook 14"</h3>
                <p>Intel Core i7 • 8GB RAM • 256GB SSD • Windows 11 Pro</p>
                <p class="prezioa">Prezioa: 849€</p>
                <button class="erosi">Erosi</button>
            </div>

            <div class="produktu">
                <img src="irudiak/4.jpg" alt="Gaming eramangarria">
                <h3>Gaming Laptop 16"</h3>
                <p>Intel Celeron N150 • 16GB RAM • 1TB SSD • WiFi 6</p>
                <p class="prezioa">Prezioa: 599€</p>
                <button class="erosi">Erosi</button>
            </div>

            <div class="produktu">
                <img src="irudiak/7.jpg" alt="Teklatu mekanikoa">
                <h3>Teklatu Mekanikoa RGB</h3>
                <p>Argiztapen koloretsua • USB konexioa • Tamaina trinkoa</p>
                <p class="prezioa">Prezioa: 69€</p>
                <button class="erosi">Erosi</button>
            </div>

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