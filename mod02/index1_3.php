<html lang="no">
    <meta charset="UTF-8"/>
    <body>
    <h4> <a href="./index.php">Tilbake til Oppgave Oversikt</a> </h4>
        <h1>2. Strengbehandling</h1>
        <form method="get">
        <label for="email">Email</label>
            <input type="text" name="email"/>

            <input type="submit" value="send"/>
        </form>
    </body>
</html>

<?php

isset($_GET['email']) == true ?  $email = $_GET['email'] :  $email = null;

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $emailErr = "Sjekket gjennom filter_var(input,filter): Feil email format.";
    echo "<p> Oppgave 3 - EMAIL: " . $emailErr . "</p>";
}

?>