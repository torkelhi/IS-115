<html lang="no">
    <body>
    <h4> <a href="./index.php">Tilbake til Oppgave Oversikt</a> </h4>
        <h2>Datosjekk</h2>
        <?php

        $currentDate = new DateTime('NOW');
        $futureDate = new DateTime('NOW');
        $futureDate->modify('+1 day');

        $prevDate = new DateTime('NOW');
        $prevDate->modify('-1 day');

        function validate(DateTime $current, DateTime $dateToCheck){
            $dateToCheck > $current ? $msg = "<p style='color: green'> Gyldig </p>" : $msg = "<p style='color: red'> Ikke Gyldig </p>";
            echo $msg;
        }

        echo "<p> Jobbananose Frist: " . $currentDate->format('Y-m-d');
        echo "Søknad sendt - " . $prevDate->format('Y-m-d') . validate($currentDate, $prevDate) . "<br>";
        echo "Søknad sendt - " . $futureDate->format('Y-m-d') . validate($currentDate, $futureDate);

        ?>
    </body>
</html>