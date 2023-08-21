<html>
    <body>
<form method="_GET">
    <label for="navn">Navn</label>
    <input type="text" name="navn"/>
    <input type="submit" value="send"/>
</form>

<?php
$input = $_GET["navn"];

function show($navn){
    if($navn != null){
        return  "Hei, " . $navn . ". Velkommen til min php verden.";
    }
}

echo "<p>" . show($input) . "<p>";
?>
    </body>
</html>
