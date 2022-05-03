<?php
require_once '2/header.php';
?>
<html>
    <body>
        <table>
            <tr>
            <th>ProduktID</th>
            <th>Bezeichnung</th>
            <th>Beschreibung</th>
            <th>Nettopreis</th>
            <th>Kategorie</th>
            <!--<th>In den Warenkorb legen:</th>-->
            </tr>
        <?php 
        $sql = "SELECT pid, bezeichnung, beschreibung, nettopreis, kategorie.name FROM produkt, kategorie where produkt.kid = kategorie.kid";
        $produktabfrage = $con -> query($sql);

        if ($produktabfrage -> num_rows > 0){
            while($row = $produktabfrage-> fetch_assoc()){
               echo "<tr><td>" . $row["pid"] . "</td><td>" . $row["bezeichnung"] . "</td><td>"  . $row["beschreibung"] . "</td><td>" . $row["nettopreis"] . "</td><td>" . $row["name"] . "</td></tr>";
            }
        }
        //. "<button type='submit' name='addtocart'>In den Warenkorb legen</button>".
        ?>
        
        </table>
        <form action="" method="post">
        <p>Zum Einkaufswagen hinzufügen: <input type="number" name="number"><button type="submit" name="addtocart">Hinzufügen</button></p>
        </form>
        
    </body>
</html>

<?php
require_once '2/footer.php';
?>