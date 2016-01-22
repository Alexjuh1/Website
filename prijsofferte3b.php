<!--Menubalk-->
<div class="Header">
    <div class="Pagina">
        <div class="header">
            <div class="Menu">
                <nav>
                    <ul>
                        <li><a href="../Website/index.html">Home</a></li>
                        <li><a href="../Website/Overons.html">Over ons</a></li>
                        <li><a href="../Website/Contact.html">Contact</a></li>
                        <li><a href="Prijsofferte.php">Offerte aanvragen</a></li>
                        <li><a href="Kalender.php">Kalender</a></li>
                    </ul>
                </nav>
            </div>
            <div class="wrapperlogo">
                <div class="Logo"><img src="logo.png"/></div>
            </div>
        </div>
        <div class="Banner"><img src="banner.jpg"/></div>

<!--Verzendcode voor bedrijven-->
        <?php
        $Naam = $_POST["Bedrijfsnaam"];
        $Provincie = $_POST["Provincie"];
        $Meters = $_POST["Meters"];
        $Kleur = $_POST["Kleur"];
        $Klaarcontrole = $_POST["Klaarcontrole"];
        $Adres = $_POST["Adres"];
        $Contactpersoon = $_POST["Naamcontactpersoon"];
        $Telefoon = $_POST["Telefooncontactpersoon"];
        $Email = $_POST["Email"];
        $Begindatum = $_POST["Begindatum"];


        $host = 'localhost';
        $user = '0912473';
        $password = 'uucaekaf';
        $database = '0912473';
        //Create connection
        $db = mysqli_connect($host, $user, $password, $database) or die("Error:" . mysqli_connect_error());
        $insert = "INSERT INTO CLE2Bedrijven (Bedrijfsnaam, Provincie, Meters, Kleur, Klaarcontrole, Adres, Contactpersoon, Telefoon, Email, Begindatum) VALUES ('$Naam','$Provincie','$Meters','$Kleur','$Klaarcontrole','$Adres','$Contactpersoon','$Telefoon','$Email','$Begindatum')";
        $result = mysqli_query($db, $insert);
        mysqli_close($db);
?>



        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <title></title>
            <link rel="stylesheet" type="text/css" href="Stylesheetprijs.css">
        </head>
        <body>

        </body>
        </html>
