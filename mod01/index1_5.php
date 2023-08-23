<html>
    <body>
    <h4> <a href="./index.php">Tilbake til Oppgave Oversikt</a> </h4>
<form method="get">
    <label for="navn">Navn</label>
    <input type="text" name="navn"/>
    <input type="submit" value="send"/>
</form>

<?php
isset($_GET["navn"]) != null ? $navn = $_GET["navn"] : $navn = null;

function show($navn){
    if($navn != null){
        echo "<p>Hei " . $navn . ". Velkommen til min php verden.</p>";
    }
}

show($navn)
?>
    </body>
</html>
