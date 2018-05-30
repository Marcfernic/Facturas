<?php
session_start();

// configura correctamente la conexión a la Base de datos

const DBNAME = 'facturas';
const DBUSER = 'alumno';
const DBPASSWORD = 'alumno';
const DBHOST = 'localhost';

function openDB() {
    $dbname = DBNAME;
    $user = DBUSER;
    $password = DBPASSWORD;
    $dbhost = DBHOST;
    try {
        $dsn = "mysql:host=$dbhost;dbname=$dbname";
        $dbh = new PDO($dsn, $user, $password);
    } catch (PDOException $e){
        echo $e->getMessage();
    }
    return $dbh;
}


function cabecera($titulo){
    ?>
    <!DOCTYPE HTML>
    <!--
        Eventually by HTML5 UP
        html5up.net | @ajlkn
        Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
    -->
    <html>
    <head>
        <title>Facturas Dos Mares - <?php echo $titulo ?></title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
        <link rel="stylesheet" href="assets/css/main.css" />
        <!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
        <!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
    </head>
    <body>

    <!-- Header -->
    <header id="header">
        <a href="/php/facturas"><h1>Facturas Dos Mares</h1></a>
        <h2><?php echo $titulo ?></h2>
        <p>Empresa dedicada a la comercialización de cruceros por los 7 mares <a href="http://html5up.net">HTML5 UP</a>.</p>
    </header>

    <?php
}
function pie(){
    ?>
    <!-- Footer -->
    <footer id="footer">
        <ul class="icons">
            <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
            <li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
            <li><a href="#" class="icon fa-github"><span class="label">GitHub</span></a></li>
            <li><a href="#" class="icon fa-envelope-o"><span class="label">Email</span></a></li>
        </ul>
        <ul class="copyright">
            <li>&copy; Untitled.</li><li>Credits: <a href="http://html5up.net">HTML5 UP</a></li>
        </ul>
    </footer>

    <!-- Scripts -->
    <!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
    <script src="assets/js/main.js"></script>

    </body>
    </html>

    <?php
}

