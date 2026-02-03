<!DOCTYPE html>
<html lang="eu">

<head>
    <meta charset="UTF-8">
    <title>Erabiltzailea sortu</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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

    <section id="create-user">
        <h1>ERABILTZAILEA SORTU</h1>

        <div class="register-box">
            <form method="get">
                <label for="izena"><i class="fa fa-id-card"></i> Izena:</label>
                <input type="text" id="izena" name="izena" placeholder="Zure izena" required>

                <label for="abizena"><i class="fa fa-id-badge"></i> Abizena:</label>
                <input type="text" id="abizena" name="abizena" placeholder="Zure abizena" required>

                <label for="helbidea"><i class="fa fa-home"></i> Helbidea:</label>
                <input type="text" id="helbidea" name="helbidea" placeholder="Zure etxeko kalea" required>

                <label for="telefonoa"><i class="fa fa-phone"></i> Telefonoa:</label>
                <input type="text" id="telefonoa" name="telefonoa" maxlength="9" minlength="9" placeholder="XXXXXXXXX"
                    required>

                <label for="erabiltzailea"><i class="fa fa-user"></i> Erabiltzailea (Email):</label>
                <input type="email" id="erabiltzailea" name="erabiltzailea" placeholder="Zure email" required>

                <label for="pasahitza"><i class="fa fa-key"></i> Pasahitza:</label>
                <input type="password" id="pasahitza" name="pasahitza" placeholder="Idatzi hemen" required>

                <button type="submit">Sortu</button>
            </form>
        </div>
    </section>

    <footer>
        <p>&copy; 2025 Company Name. All rights reserved.</p>
        <p>Email: info@company.com | Tel: +34 600 123 456</p>
        <p>Address: Main Street 12, Donostia, Basque Country</p>

        <div class="redes">
            <a href="https://instagram.com" target="_blank">Instagram</a>
            <a href="https://facebook.com" target="_blank">Facebook</a>
            <a href="https://twitter.com" target="_blank">X</a>
        </div>
    </footer>
</body>

</html>