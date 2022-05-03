<?php
require_once '2/header.php';
?>
<div>
<h1>Registrieren</h1>
<p>Du hast schon einen Konto?<a href="login.php">Anmelden!</a></p>

<form action="2/register2.php" method="post"> 
    <input type="text" name="vorname" placeholder="Vorname">
    <input type="text" name="nachname" placeholder="Nachname">
    <input type="text" name="email" placeholder="E-Mail">
    <input type="text" name="strasse" placeholder="Strasse">
    <input type="text" name="hausnummer" placeholder="Hausnummer">
    <input type="text" name="plz" placeholder="PLZ">
    <input type="text" name="ort" placeholder="Ort">
    <input type="password" name="password" placeholder="Passwort">
    <input type="password" name="confirmpassword" placeholder="Passwort bestätigen">
    <button type="submit" name="submit">Registrieren</button>
</form>
</div>
<?php
require_once '2/footer.php';
?>