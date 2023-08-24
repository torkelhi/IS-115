<html lang="no">
    <meta charset="UTF-8"/>
    <body>
    <h4> <a href="./index.php">Tilbake til Oppgave Oversikt</a> </h4>
        <h1>2. Strengbehandling</h1>
        <form method="get">

            <label for="passord">Passord </label>
            <input type="password" name="passord" />

            <input type="submit" value="send"/>
        </form>
    </body>
</html>

<?php

isset($_GET['passord']) == true ? $passord = $_GET['passord'] : $passord = null ;

if($passord != null){
    $salt = random_bytes(rand(16,32));

    $salt_input = $passord . "." . $salt;
    echo "<p> Oppgave 5 </p>";
    echo "<p> SALT: ". md5($salt) . "</p>";
    echo "<p> PASSORD INPUT: ". $passord . "</p>";
   echo "<p> HASHED PASSORD: " . md5($salt_input) . "</p>";
   echo "<p> HASHED PASSORD MED 8 CHARS: " . substr(md5($salt_input),-8) . "</p>";
   echo "<p> Spørringer blir sendt gjennom URL, dermed er dette ikke en sikker metode, men funksjonen lager nye hash selvom man har samme passord <p>";
} 


isset($_GET['passord']) == true ?  $passord = $_GET['passord'] :  $passord = null;
?>

