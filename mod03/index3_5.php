<html lang="no">

<body>
    <h4> <a href="./index.php">Tilbake til Oppgave Oversikt</a> </h4>
    <h2>sjakk og hvete</h2>
    <p>I følge wikipedia, har et sjakkbrett består av 64 like store, kvadratiske felt. Det er 32 mørke og 32 lyse ruter </p>
    <p> Ifølge ChatGPT-4, veier et
        gjennomsnittlig hvetekorn omtrent 0,035 gram.
    </p>
    <?php
    $HVETEKORN_VEKT = 0.035;
    //$vekt_holder = 0;
    $antall = array();

    for ($i = 0; $i < 64; $i++) {
        if($i === 0){
            array_push($antall, 1);
            echo "<p> Rute 1 har ett hvetekorn. <br> Vekt: " . $HVETEKORN_VEKT . "</p>";;
        }
        else {
        $prevAntall = $antall[$i - 1];
        array_push($antall, $prevAntall * 2);
        echo "<p> Rute " . $i + 1 . " har " . $antall[$i] . " hvetekorn. <br> Vekt: " . $antall[$i] * $HVETEKORN_VEKT . "</p>";
        }
    }

    echo "<p> Vekt i Tonn Rute 64 - " . (end($antall) * $HVETEKORN_VEKT) / pow(10,6);
    echo "<p> Total Vekt i Tonn: " . (array_sum($antall) * $HVETEKORN_VEKT) / pow(10,6);
    ?>
</body>

</html>