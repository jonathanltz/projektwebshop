<?php
require_once '2/header.php';
?>
<div>
<h1>Anmelden</h1>
<p>Kein Account? <a href="register.php">Hier Registrieren</a></p>

<form action="2/login2.php" method="post"> 
    <input type="text" name="email" placeholder="E-Mail">
    <input type="password" name="passwort" placeholder="Passwort">
    <button type="submit" name="submit">Anmelden</button>
</form>
</div>
<?php
require_once '2/footer.php';
?>