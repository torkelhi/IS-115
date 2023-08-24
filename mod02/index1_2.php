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

            <input type="submit" value="send"/>
        </form>
        <br>

        <?php
        isset($_GET['fornavn']) == true ? $fornavn = $_GET['fornavn'] : $fornavn = null;
        isset($_GET['etternavn']) == true ? $etternavn = $_GET['etternavn'] : $etternavn = null ;


        if($fornavn != null && $etternavn != null){
            $name = ucfirst(strtolower($fornavn)) . " " . ucfirst(strtolower($etternavn));

            echo "<p> Oppgave 1 NAVN: " . strip_tags($name) . "</p>";
            echo "<p> Lengde av navn: " . strlen($name). "</p>";
        }
        ?>
    </body>
</html>