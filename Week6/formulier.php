<?php

echo $_POST['voornaam'];
echo "<br>";
echo $_POST['achternaam'];
echo "<br>";
echo $_POST['gebruikersnaam'];
echo "<br>";
echo $_POST['email'];
echo "<br>";
$hash = password_hash('wachtwoord', PASSWORD_DEFAULT);
echo $hash;
echo "<br>";
echo $_POST['telefoonnummer'];
echo "<br>";



?>