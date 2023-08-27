<html lang="no">

<body>
    <h4> <a href="./index.php">Tilbake til Oppgave Oversikt</a> </h4>
    <h2>sjekke tilhørlighet</h2>

    <?php
    $map = array(
        'Kristiansand', 'Lillesand', 'Birkenes', 'Harstad', 'Kvæfjord', 'Tromsø', 'Bergen',
        'Trondheim', 'Bodø', 'Alta'
    );

    echo "<form method='POST'>";
    echo "<label for='kommune'> Kommune </label>";

    echo "<select name='kommune'>";
    foreach ($map as $kommune) {
        echo "<option value=\"$kommune\">$kommune</option>";
    }

    echo "</select>";
    echo "<input type='submit' value='send'/>";
    echo "</form>";


    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        isset($_POST["kommune"]) == true ? $kommune = $_POST["kommune"] : $kommune = null;

        $fylke = match ($kommune) {
            "Kristiansand", "Lillesand", "Birkenes" => "Agder",
            "Harstad", "Kværfjord", "Tromsø" => "Troms og Finnmark",
            "Bergen" => "Vestland",
            "Trondheim" => "Trønderlag",
            "Bodø" => "Nordland",
            "Alta" => "Finnmark"
        };

        echo  "<p>" . $kommune . " ligger i " . $fylke .  " fylke <p>";
    }
    ?>
</body>

</html>