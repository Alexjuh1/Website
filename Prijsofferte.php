<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="Stylesheet.css">
</head>
<body>
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
                        <li><a href="<? $_SERVER["REQUEST_URI"] ?>">Offerte aanvragen</a></li>
                        <li><a href="Kalender.php">Kalender</a></li>
                    </ul>
                </nav>
            </div>
            <div class="Logo"><img src="logo.png"/></div>
        </div>
        <div class="Banner"><img src="banner.jpg"/></div>

<!--Hoofdtekst-->
        <p>Goede dag, allereerst willen wij u hartelijk danken voor het tonen van interesse in Combiflex & Renoflex, wij zullen voor u een zo scherp mogelijke offerte opstellen.</p>

        <p>Hiervoor hebben wij een paar korte vraagjes voor u.</p>

        <form action="Prijsofferte2.php" method="post">
            </br>
            </br>
<!--            Vraag voor Bedrijf of Particulier-->
            Ik ben een
            <select name="bedrijfofparticulier" id="badrijfofparticulier">
                <option value="bedrijf">Bedrijf</option>
                <option value="particulier">Particulier</option>
            </select>
            <input type="submit" value="Verder">
        </form>
</body>
</html>
