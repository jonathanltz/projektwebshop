<?php
if (isset($_POST['submit'])) {
    require 'database.php';
    $email = $_POST['email'];
    $passwort = $_POST['passwort'];
    if (empty($email) || empty($passwort)) {
        header("Location: ../index.php?error=emptyfields");
        exit();
    } else {
        $sql = "SELECT * FROM kunde WHERE email = ?";
        $stmt = mysqli_stmt_init($con);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../index.php?error=sqlerror");
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, "s", $email);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            if ($row = mysqli_fetch_assoc($result)) {
                $passcheck = password_verify($passwort, $row['passwort']);
                
                if ($passcheck == false) {
                    header("Location: ../index.php?error=wrongpass");
                    exit();
                } elseif ($passcheck == true) {
                    session_start();
                    $_SESSION['kundennummer'] = $row['kundennummer'];
                    $_SESSION['email'] = $row['email'];
                    header("Location: ../index.php?anmeldung=erfolgreich");
                    exit();
                } else {
                    header("Location: ../index.php?error=wrongpass");
                    exit();
                }
            } else {
                header("Location: ../index.php?error=nouser");
                exit();
            }
        }
    }
}else {
                header("Location: ../index.php?error=accessforbidden");
                exit();
            }
?>