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

<!--Verzendcode voor particulieren-->
        <?php
        $Naam = $_POST["Naam"];
        $Provincie = $_POST["Provincie"];
        $Werk = $_POST["Werk"];
        $Kleur = $_POST["Kleur"];
        $Klaarcontrole = $_POST["Klaarcontrole"];
        $Adres = $_POST["Adres"];
        $Telefoonnummer = $_POST["Telefoonnummer"];
        $Email = $_POST["Email"];
        $Datum = $_POST["Datum"];


        $host = 'localhost';
        $user = '0912473';
        $password = 'uucaekaf';
        $database = '0912473';
        //Create connection
        $db = mysqli_connect($host, $user, $password, $database) or die("Error:" . mysqli_connect_error());
        $insert = "INSERT INTO CLE2Particulieren (Naam, Provincie, Werk, Kleur, Klaarcontrole, Adres, Telefoonnummer, Email, Datum) VALUES ('$Naam','$Provincie','$Werk','$Kleur','$Klaarcontrole','$Adres','$Telefoonnummer','$Email','$Datum')";
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
        Uw reservering is succesvol bij ons ontvangen, er wordt zo snel mogelijk contact met u opgenomen
        </body>
        </html>
