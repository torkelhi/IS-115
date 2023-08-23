<html lang="no">
<meta charset="UTF-8"/>
    <body>
    <h4> <a href="./index.php">Tilbake til Oppgave Oversikt</a> </h4>

    <form method="get">
        <p> Differanse </p>
       <input type="number" name="x" />
       <p> og </p>
       <input type="number" name="y" />
       <input type="submit" value="Få resultat"/>
    </form>
    <?php
     isset($_GET['x']) == true ? $x = $_GET['x'] : $x = null;
     isset($_GET['y']) == true ? $y = $_GET['y'] : $y = null ;

     if($x != null && $y != null){
        echo "<p> Differansen mellom " . $x . " og " . $y . " er " . $y - $x . "." ;
     }
    ?>
    </body>
</html>