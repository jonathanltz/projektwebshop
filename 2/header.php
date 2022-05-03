<?php
//session_start();
require_once 'database.php';
//require_once 'register2.php';

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Projekt</title>
    </head>
    <body>
        <header>
            <nav>
            <table>
                <tr>
                    <td>
                    <li>
                        <a href="index.php">Startseite</a>
                    </li>
                    </td>
                    <td>
                        <?php echo "Kundennummer: " . $_SESSION['kundennummer']?>
                    </td>
                </tr>
                <tr>
                    <td>
                     <li>
                        <a href="shop.php">Produkte</a>
                    </li>
                    </td>
                </tr>
                <tr>
                    <td>
                    <li> 
                        <a href="cart.php">Warenkorb</a>
                    </li>
                    </td>
                </tr>
                <tr>
                    <td>
                    <li>
                        <a href="login.php">Anmelden</a>
                    </li>
                    </td>
                </tr>
                <tr>
                    <td>
                    <li>
                        <a href="register.php">Registrieren</a>
                    </li>
                    </td>
                </tr>
            </table>
            </nav>
            <br>
        </header>