<html lang="no">
    <meta charset="UTF-8"/>
    <body>
    <h4> <a href="./index.php">Tilbake til Oppgave Oversikt</a> </h4>
        <h1>2. Strengbehandling</h1>
        <form method="get">
            <label for="fornavn">Fornavn</label>
            <input type="text" name="fornavn"/>

            <label for="etternavn">Etternavn</label>
            <input type="text" name="etternavn"/>

            <label for="email">Email</label>
            <input type="text" name="email"/>
        </form>
        <br>

        <?php
        isset($_GET['fornavn']) == true ? $fornavn = $_GET['fornavn'] : $fornavn = null;
        isset($_GET['etternavn']) == true ? $etternavn = $_GET['etternavn'] : $etternavn = null ;
        isset($_GET['passord']) == true ?  $passord = $_GET['passord'] :  $passord = null;
        isset($_GET['email']) == true ?  $email = $_GET['email'] :  $email = null;

        // oppgave 2 $html_with_tags = "<p> heisann Oppgave 2 hvordan går det ? </p>";

        if($fornavn != null && $etternavn != null){
            $name = ucfirst(strtolower($fornavn)) . " " . ucfirst(strtolower($etternavn));

            echo "<p> Oppgave 1 NAVN: " . $name . "</p>";
            echo "<p> Lengde av navn: " . strlen($name). "</p>";
        }

       // echo strip_tags(htmlentities($html_with_tags,ENT_QUOTES));

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $emailErr = "Sjekket gjennom filter_var(input,filter): Feil email format.";
  echo "<p> Oppgave 3 - EMAIL: " . $emailErr . "</p>";
}


        if($passord != null){
        $salt = random_bytes(rand(16,32));

        $salt_input = $passord . $salt;
        echo "<p> Oppgave 5 </p>";
        echo "<p> SALT: ". md5($salt) . "</p>";
        echo "<p> PASSORD INPUT: ". $passord . "</p>";
       echo "<p> HASHED PASSORD: " . md5($salt_input) . "</p>";
       echo "<p> HASHED PASSORD MED 8 CHARS: " . substr(md5($salt_input),-8) . "</p>";
       echo "<p> Spørringer blir sendt gjennom URL, dermed er dette ikke en sikker metode, men funksjonen lager nye hash selvom man har samme passord <p>";
    } 
        ?>
    </body>
</html>