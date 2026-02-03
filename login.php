<!DOCTYPE html>
<html lang="eu">

<head>
    <meta charset="UTF-8">
    <title>Login</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body><?php
        session_start();
        include("konexioa.php");

        if (!isset($_SESSION['saskia']) && isset($_COOKIE['saskia'])) {
            $_SESSION['saskia'] = json_decode($_COOKIE['saskia'], true);
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $email = $_POST['erabiltzailea'];
            $pasahitza = $_POST['pasahitza'];

            $sql = "select * from erabiltzaileak where email=? and pasahitza=?";
            $stmt=$conn->prepare($sql);
            $stmt->bind_param('ss', $email, $pasahitza);
            $stmt->execute();
            $result = $stmt->get_result();
            $row=$result->fetch_assoc();
            if($row){
                // Guardar datos en sesión
                $_SESSION['id'] = $row['id'];
                $_SESSION['izena'] = $row['izena'];
                $_SESSION['rol'] = $row['rol'];
                // Redirigir al index
                header("Location: index.php");
                exit();
            }else{
                $error="Pasahitza edo email okerra";
            }
        }
    ?><header>
        <nav>
            <a class="berritech-btn">
                <img src="irudiak/LogoErronka1.png" alt="Berritech">
            </a>
            <a href="index.html">SARRERA</a>
            <a href="produktuak.html">PRODUKTUAK</a>
            <a href="norgara.html">NOR GARA</a>
            <a href="formularioa.html">FORMULARIOA</a>
            <a href="login.html">LOGIN</a>
        </nav>
    </header>

    <section id="login">
        <h1>LOGIN</h1>

        <?php if (isset($error)) echo "<p class='error'>$error</p>"; ?>

        <div class="login-box">
            <form method="post">
                <label for="erabiltzailea"><i class="fa fa-user"></i> Erabiltzailea:</label>
                <input type="email" id="erabiltzailea" name="erabiltzailea" placeholder="Zure email" required>

                <label for="pasahitza"><i class="fa fa-key"></i> Pasahitza:</label>
                <input type="password" id="pasahitza" name="pasahitza" placeholder="Idatzi hemen" required>

                <button type="submit">Sartu</button>
            </form>

            <div class="no-account">
                <a href="createUser.html">Ez duzu konturik?<br><strong>Sartu hemen</strong></a>
            </div>
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