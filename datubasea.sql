CREATE DATABASE ERRONKA2;
USE ERRONKA2;

-- =========================
-- ERABILTZAILEAK 
-- =========================
CREATE TABLE erabiltzaileak (
    id INT AUTO_INCREMENT PRIMARY KEY,
    izena VARCHAR(50) NOT NULL,
    abizena VARCHAR(50) NOT NULL,
    dni VARCHAR(10),
    email VARCHAR(100) NOT NULL UNIQUE,
    telefonoa VARCHAR(20),
    pasahitza VARCHAR(255) NOT NULL,
    helbidea VARCHAR(150),
    rol VARCHAR(30) DEFAULT 'bezeroa'
);

-- =========================
-- PRODUKTUAK
-- =========================
CREATE TABLE produktuak (
    id INT AUTO_INCREMENT PRIMARY KEY,
    izena VARCHAR(100) NOT NULL,
    kategoria VARCHAR(50),
    mota VARCHAR(50),
    modeloa VARCHAR(50),
    prezioa DECIMAL(10,2) NOT NULL,
    konektibitatea VARCHAR(100),
    irudia VARCHAR(255),
    egoera ENUM('Ikusgai','Ez ikusgai') DEFAULT 'Ikusgai',
    stock INT DEFAULT 0
);

-- =========================
-- SASKIA 
-- =========================
CREATE TABLE saskia (
    id INT AUTO_INCREMENT PRIMARY KEY,
    erabiltzailea_id INT NOT NULL,
    produktua_id INT NOT NULL,
    kantitatea INT NOT NULL,
    FOREIGN KEY (erabiltzailea_id)
        REFERENCES erabiltzaileak(id)
        ON DELETE CASCADE,
    FOREIGN KEY (produktua_id)
        REFERENCES produktuak(id)
        ON DELETE CASCADE
);

-- =========================
-- EROSKETAK
-- =========================
CREATE TABLE erosketak (
    id INT AUTO_INCREMENT PRIMARY KEY,
    erabiltzailea_id INT NOT NULL,
    data DATETIME NOT NULL,
    bidalketa_egoera VARCHAR(50),
    FOREIGN KEY (erabiltzailea_id)
        REFERENCES erabiltzaileak(id)
);

-- =========================
-- EROSKETA XEHETASUNAK 
-- =========================
CREATE TABLE erosketa_xehetasunak (
    id INT AUTO_INCREMENT PRIMARY KEY,
    erosketa_id INT NOT NULL,
    produktua_id INT NOT NULL,
    kantitatea INT NOT NULL,
    prezioa_momentuan DECIMAL(10,2) NOT NULL,
    FOREIGN KEY (erosketa_id)
        REFERENCES erosketak(id)
        ON DELETE CASCADE,
    FOREIGN KEY (produktua_id)
        REFERENCES produktuak(id)
);

-- =========================
-- FORMULAROAK 
-- =========================
CREATE TABLE formularoak (
    id INT AUTO_INCREMENT PRIMARY KEY,
    mota VARCHAR(50),
    mezua TEXT,
    egoera VARCHAR(50),
    data DATETIME,
    erabiltzailea_id INT,
    FOREIGN KEY (erabiltzailea_id)
        REFERENCES erabiltzaileak(id)
);

-- =========================
-- LANGILEAK (EMPLEADOS)
-- =========================
CREATE TABLE langileak (
    id INT AUTO_INCREMENT PRIMARY KEY,
    izena VARCHAR(50) NOT NULL,
    abizena VARCHAR(50) NOT NULL,
    email VARCHAR(100),
    telefonoa VARCHAR(20),
    pasahitza VARCHAR(255),
    kargua VARCHAR(50)
);

-- =========================
-- FITXAKETAK 
-- =========================
CREATE TABLE fitxaketak (
    id INT AUTO_INCREMENT PRIMARY KEY,
    langilea_id INT NOT NULL,
    mota VARCHAR(50),
    data DATE,
    ordua TIME,
    intzidentzia TEXT,
    FOREIGN KEY (langilea_id)
        REFERENCES langileak(id)
        ON DELETE CASCADE
);
CREATE TABLE formularoak (
    id INT AUTO_INCREMENT PRIMARY KEY,
    izena VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    telefonoa VARCHAR(20),
    mota VARCHAR(50) NOT NULL,
    mezua TEXT
);
CREATE TABLE erabiltzaileak (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    izena VARCHAR(50) NOT NULL,
    abizena VARCHAR(50) NOT NULL,
    korreoa VARCHAR(100) NOT NULL UNIQUE,
    pasahitza VARCHAR(255) NOT NULL,
    rola ENUM('admin', 'user') NOT NULL DEFAULT 'user',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);


INSERT INTO erabiltzaileak (izena, abizena, dni, email, telefonoa, pasahitza, helbidea, rol) VALUES
('Aitor', 'Garcia', '12345678A', 'aitor@gmail.com', '600111111', '1MG32025', 'Bilbao', 'bezeroa'),
('Mikel', 'Lopez', '23456789B', 'mikel@gmail.com', '600222222', '1MG32025', 'Donostia', 'bezeroa'),
('Ane', 'Perez', '34567890C', 'ane@gmail.com', '600333333', '1MG32025', 'Gasteiz', 'bezeroa'),
('Iker', 'Martinez', '45678901D', 'iker@gmail.com', '600444444', '1MG32025', 'Irun', 'bezeroa'),
('Leire', 'Sanchez', '56789012E', 'leire@gmail.com', '600555555', '1MG32025', 'Eibar', 'bezeroa'),
('Unai', 'Ruiz', '67890123F', 'unai@gmail.com', '600666666', '1MG32025', 'Tolosa', 'bezeroa'),
('Nerea', 'Alonso', '78901234G', 'nere@gmail.com', '600777777', '1MG32025', 'Zarautz', 'bezeroa'),
('Jon', 'Mora', '89012345H', 'jon@gmail.com', '600888888', '1MG32025', 'Hernani', 'bezeroa'),
('Admin', 'Principal', '99999999Z', 'admin@gmail.com', '600999999', '1MG32025', 'Oficina', 'administratzailea'),
('Maite', 'Diaz', '11112222J', 'maite@gmail.com', '601000000', '1MG32025', 'Errenteria', 'bezeroa');
INSERT INTO produktuak (izena, kategoria, mota, modeloa, prezioa, konektibitatea, irudia, egoera, stock) VALUES
('Teclado Logitech K120', 'Periferikoak', 'Teclado', 'K120', 15.99, 'USB', 'img/teclado1.jpg', 'Ikusgai', 50),
('Raton Logitech G203', 'Periferikoak', 'Ratón', 'G203', 29.99, 'USB', 'img/raton1.jpg', 'Ikusgai', 40),
('Monitor Samsung 24\"', 'Pantailak', 'Monitor', 'S24F350', 149.99, 'HDMI', 'img/monitor1.jpg', 'Ikusgai', 20),
('Portatil HP 15', 'Ordenagailuak', 'Portátil', 'HP15', 599.99, 'WiFi', 'img/portatil1.jpg', 'Ikusgai', 10),
('SSD Kingston 500GB', 'Biltegiratzea', 'SSD', 'A400', 45.99, 'SATA', 'img/ssd1.jpg', 'Ikusgai', 60),
('RAM Corsair 16GB', 'Memoria', 'RAM', 'Vengeance', 79.99, 'DDR4', 'img/ram1.jpg', 'Ikusgai', 35),
('Impresora HP Deskjet', 'Inprimagailuak', 'Impresora', 'Deskjet 2720', 69.99, 'WiFi', 'img/impresora.jpg', 'Ikusgai', 15),
('Auriculares Sony', 'Audio', 'Cascos', 'WH-1000', 199.99, 'Bluetooth', 'img/cascos.jpg', 'Ikusgai', 12),
('Webcam Logitech C920', 'Accesorios', 'Webcam', 'C920', 89.99, 'USB', 'img/webcam.jpg', 'Ikusgai', 25),
('Router TP-Link', 'Redes', 'Router', 'Archer C6', 49.99, 'WiFi', 'img/router.jpg', 'Ikusgai', 30);
INSERT INTO formularoak (mota, mezua, egoera, data, erabiltzailea_id) VALUES
('Contacto', 'No puedo iniciar sesión', 'Pendiente', NOW(), 1),
('Soporte', 'El producto llegó dañado', 'Pendiente', NOW(), 2),
('Consulta', '¿Tenéis stock de portátiles?', 'Pendiente', NOW(), 3),
('Soporte', 'Problemas con el pago', 'Pendiente', NOW(), 4),
('Contacto', 'Quiero cambiar mi dirección', 'Pendiente', NOW(), 5),
('Consulta', 'Tiempo de envío', 'Pendiente', NOW(), 6),
('Soporte', 'Error en la web', 'Pendiente', NOW(), 7),
('Contacto', 'Factura de compra', 'Pendiente', NOW(), 8),
('Consulta', 'Garantía del producto', 'Pendiente', NOW(), 9),
('Soporte', 'No me llega el correo', 'Pendiente', NOW(), 10);
