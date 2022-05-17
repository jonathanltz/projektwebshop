<?php
if (isset($_POST['submit'])) {
    require 'database.php';
   
    $vorname = $_POST['vorname'];
    $nachname = $_POST['nachname'];
    $email = $_POST['email'];
    $passwort = $_POST['password'];
    $confpass = $_POST['confirmpassword'];
    $strasse = $_POST['strasse'];
    $hausnummer = $_POST['hausnummer'];
    $plz = $_POST['plz'];
    $ort = $_POST['ort'];
    
    if (empty($vorname) || empty($nachname) || empty($passwort) ||empty($confpass) || empty($strasse) || empty($hausnummer) || empty($plz) || empty($ort)) {
        header("Location: ../register.php?error=emptyfields");
        exit();
    } elseif($passwort !== $confpass) {
        header("Location: ../register.php?error=passwordsdonotmatch");
        exit();
    } 
    
    else {
        $sql = "SELECT email FROM kunde WHERE email = ?";
        //^ prepared statement wegen sql injection
        $stmt = mysqli_stmt_init($con);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../register.php?error=sqlerror1");
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, "s", $email);
            //^ s wegen string 
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $rowcount = mysqli_stmt_num_rows($stmt);

            if ($rowcount > 0) {
                header("Location: ../register.php?error=emailallreadyinuse");
                exit();
            } else {
                $sql = "INSERT INTO kunde (vorname, nachname, email, passwort, strasse, hausnummer, plz, ort) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
                $stmt = mysqli_stmt_init($con);
                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    header("Location: ../register.php?error=sqlerror2");
                    exit();
                } else {
                    $hashedpw = password_hash($passwort, PASSWORD_DEFAULT);
                    mysqli_stmt_bind_param($stmt, "sssssiis", $vorname, $nachname, $email, $hashedpw, $strasse, $hausnummer, $plz, $ort);
                  //$stmt->execute();
                    mysqli_stmt_execute($stmt);
                    header("Location: ../login.php?succes=registered");
                    exit();
                }
            }
        }
    }//wqeq

    mysqli_stmt_close($stmt);
    mysqli_close($con);
}
?>