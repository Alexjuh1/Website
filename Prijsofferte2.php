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
<!--Vragenlijst voor particulieren en bedrijven-->
        <div class="offerte">
            <?php
            ?>
            <?php
            if ($_POST["bedrijfofparticulier"] == 'particulier') {
                ?>
                <form action="prijsofferte3p.php" method="post" class="text">
                    Wat is uw naam?<br>
                    <input type="text" Name="Naam" value=""></br>
                    In welke provincie woont u?<br>
                    <input type="text" Name="Provincie" value=""></br>
                    Wat wilt u gekit hebben?<br>
                    <input type="text" Name="Werk" value=""></br>
                    Welke kleur zijn de voegen in de ruimte die gekit moet worden?<br>
                    <input type="text" Name="Kleur" value=""></br>
                    Is alles in de ruimte af behalve het kitwerk? Zo nee, graag noteren wat er nog gedaan moet worden.<br>
                    <input type="text" Name="Klaarcontrole" value=""> </br>
                    Gelieve hier onder uw adres in te vullen.<br>
                    <input type="text" Name="Adres" value=""> </br>
                    Gelieve hier onder uw telefoonnummer in te vullen, mochten er problemen zijn kunnen wij u hiervan op de hoogte stellen.<br>
                    <input type="text" Name="Telefoonnummer" value=""></br>
                    Gelieve hier onder uw e-mail in te vullen.<br>
                    <input type="text" Name="Email" value=""><br>
                    Op welke datum wilt u uw afspraak maken? (dd-mm-yyyy)<br>
                    <input type="date" Name="Datum" value=""></br>

                    <input type="submit"/>

                </form>

                <?php
            }


            if ($_POST["bedrijfofparticulier"] == 'bedrijf') {
                ?>
                <form action="prijsofferte3b.php" method="post">
                    Wat is de naam van uw bedrijf?<br>
                    <input type="text" Name="Bedrijfsnaam" value=""></br>
                    In welke provincie moet er gekit worden?<br>
                    <input type="text" Name="Provincie" value=""></br>
                    Hoeveel meter moet er gekit worden?<br>
                    <input type="number" Name="Meters" value=""></br>
                    Welke kleur zijn de voegen in de ruimte die gekit moet worden?<br>
                    <input type="text" Name="Kleur" value=""></br>
                    Is alles in de ruimte af behalve het kitwerk? Zo nee, graag noteren wat er nog gedaan moet worden.<br>
                    <input type="text" Name="Klaarcontrole" value=""></br>
                    Gelieve hier onder het adres in te vullen.<br>
                    <input type="text" Name="Adres" value=""></br>
                    Gelieve de naam te geven van een contactpersoon die wij zouden kunnen bereiken in het geval van problemen.<br>
                    <input type="text" Name="Naamcontactpersoon" value=""></br>
                    Gelieve hier onder het telefoonnummer van de contactpersoon in te vullen.<br>
                    <input type="text" Name="Telefooncontactpersoon" value=""></br>
                    Gelieve hier onder het e-mailadres van de contactpersoon in te vullen.<br>
                    <input type="text" Name="Email" value=""><br>
                    Wat is de begin datum van het project? <br>
                    <input type="date" Name="Begindatum" value=""></br>
                    <input type="submit" Name="send"/>
                </form>
                <?php
            }
            ?>
        </div>


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
