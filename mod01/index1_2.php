<html lang="no">
<body>
<h4> <a href="./index.php">Tilbake til Oppgave Oversikt</a> </h4>
<?php

echo  "<h2> Display errors: </h2> <p> TRUE </p>";
echo  "<h2> Document root: </h2> <p> /var/www/html </p>";

// beskriver tilstanden til php.
// display_errors = true
// document_root = /var/www/html
phpinfo();
?>

</body>
</html>