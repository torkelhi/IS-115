<html lang="no">
    <body>
    <h4> <a href="./index.php">Tilbake til Oppgave Oversikt</a> </h4>
        <h2>Ny Saldo</h2>
        <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $balanse = $_POST["balanse"];
            $rente = $_POST["rente"]/100 + 1;
            $år = $_POST["år"];

                for($i=1; $i <= $år; $i++){
                 $balanse * $rente;
                    $balanse = $balanse * $rente;
                    echo "<p> S" . $i . ": " . round($balanse,2) . "</p>";
                    flush();
                    sleep(1);
                    $balanse = $balanse * $rente;
                }
            }
        ?>

        <form method="POST">
            <label for="balanse">Balanse</label>
        <input type="number" name="balanse" required>
        <label for="rente">Rente</label>
        <input type="number" name="rente" step="1" placeholder="%"required>
        <label for="år">År</label>
        <input type="number" name="år" required>
        <input type="submit" value="Send">
        </form>
    </body>
</html>