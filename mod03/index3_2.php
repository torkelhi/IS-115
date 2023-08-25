<html lang="no">
    <body>
    <h4> <a href="./index.php">Tilbake til Oppgave Oversikt</a> </h4>
        <h2>telle med pause</h2>
        <?php
    $sum = 0;
        for($i=0; ; $i++) {

            if($i === 9){
                echo "<p>" . $i . "</p> \n";
                $sum += $i;
                flush();
                sleep(2);
                echo "<p> Ferdig å telle! Summen av tallene ble " . $sum . "</p>";
                break;
            }
            $sum += $i;
            echo "<p>" . $i . "</p> \n";
            flush();
            sleep(1);
        }


        ?>
    </body>
</html>