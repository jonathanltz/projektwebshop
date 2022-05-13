<?php
session_start();
require_once 'database.php';
//require_once 'register2.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>PumpUp</title>
        <script src="js/menu.js"></script>
        <link rel="stylesheet" href="../css/style.css">
    </head>

    <body id="body">
        <header>

        <nav id='menu'>
           <input type='checkbox' id='responsive-menu' onclick='updatemenu()'><label></label>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a class='dropdown-arrow' href='shop.php'>Produkte</a>
                    <ul class='sub-menus'>
                        <li><a href='http://'>Klein</a></li>
                        <li><a href='http://'>Groﬂ</a></li>
                    </ul>
                </li>
                <li><a class='dropdown-arrow' href='http://'>Services</a>
                    <ul class='sub-menus'>
                       <li><a href='login.php'>Anmelden</a></li>
                       <li><a href='register.php'>Registrieren</a></li>
                    </ul>
                </li>
                <li><a href='cart.php'>Warenkorb</a></li>
            </ul>

        </nav>
        <br>
    </header>

</html>