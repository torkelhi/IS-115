<html>

<body>
    <h4> <a href="./index.php">Tilbake til Oppgave Oversikt</a> </h4>
</body>

</html>

<?php
$_SESSION["Fornavn"] = "Torkel";
$_SESSION["Etternavn"] = "Ivarsøy";
$_SESSION["Email"] = "test@test.com";
$_SESSION["Nummer"] = "58833544";

$bruker = array();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (validate()) {
        isChanges();
        $_SESSION["Fornavn"] =  $_POST['fornavn'];
        $_SESSION["Etternavn"] =  $_POST['etternavn'];
        $_SESSION["Email"] = $_POST['email'];
        $_SESSION["Nummer"] =  $_POST['tlf-nummer'];
    }
}

echo "<div id='form' action='{$_SERVER['PHP_SELF']}'>";
echo "<form method='POST'>";
echo "<label for='fornavn'>Fornavn</label>";
echo "<input type='text' name='fornavn' value='{$_SESSION['Fornavn']}'/>";

echo "<label for='etternavn'>Etternavn</label>";
echo "<input type='text' name='etternavn' value='{$_SESSION['Etternavn']}' />";

echo "<label for='email'>Email</label>";
echo "<input type='text' name='email'  value='{$_SESSION['Email']}' />";

echo "<label for='tlf-nummer'>Nummer</label>";
echo "<input type='text' name='tlf-nummer' value='{$_SESSION['Nummer']}' />";

echo "<input type='submit' name='formsub' value='send'/>";
echo "</form>";
echo "</div id='form'>";

foreach ($_SESSION as $brukerKeys => $val) {
    print_r("$brukerKeys : $val <br>");
}

function validate()
{
    if ($_POST['formsub']) {
        $valid = true;

        $errosMsg = array();

        if (!$_POST['fornavn']) {
            $errosMsg['Fornavn'] = 'Mangler fornavn';
            $valid = false;
        }
        if (!$_POST['etternavn']) {
            $errosMsg['Etternavn'] = 'Mangler etternavn';
            $valid = false;
        }
        if (!$_POST['email']) {
            $errosMsg['Email'] = 'Mangler email';
            $valid = false;
        }
        if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) && $_POST['email']) {
            $errosMsg['Email-Format'] = 'feil format på email';
            $valid = false;
        }
        if (!$_POST['tlf-nummer']) {
            $errosMsg['Tlf-nummer'] = 'Mangler tlf-nummer';
            $valid = false;
        }
        if ($_POST['tlf-nummer']) {
            $integerVal = intval($_POST['tlf-nummer']);

            if($integerVal == 0){
                $errosMsg['Tlf-nummer'] = 'må være tall';
                $valid = false;
            }
            if (strlen($_POST['tlf-nummer']) < 8 && $integerVal != 0 ) {
                $errosMsg['Tlf-nummer'] = 'Ikke nok sifre i tlf nummer';
                $valid = false;
            }
            if (strlen($_POST['tlf-nummer']) > 8 && $integerVal != 0 ) {
                $errosMsg['Tlf-nummer'] = 'For mange sifre i tlf nummer';
                $valid = false;
            }
            
        }

        foreach ($errosMsg as $label => $msg) {
            print_r("$label : $msg <br>");
        }

        return $valid;
    }
}
function isChanges()
{
    $isChanges = false;
    $changes = array();
    if ($_POST['fornavn'] != $_SESSION["Fornavn"]) {
        $changes['Fornavn'] = new DateTime('now');
        $isChanges = true;
    }else{$changes['Fornavn'] = "";}

    if ($_POST['etternavn'] != $_SESSION["Etternavn"]) {
        $changes['Etternavn'] = new DateTime('now');
        $isChanges = true;
    }else{$changes['Etternavn'] = "";}

    if ($_POST['email'] != $_SESSION["Email"]) {
        $changes['Email'] = new DateTime('now');
        $isChanges = true;
    }else{$changes['Email'] = "";}
    
    if ($_POST['tlf-nummer'] != $_SESSION["Nummer"]) {
        $changes['Nummer'] = new DateTime('now');
        $isChanges = true;
    }else{$changes['Nummer'] = "";}


        foreach ($changes as $label => $dato) {
            if(empty($dato)){
                print_r(" ");
            } else {
                print_r("$label : Sist Endret - {$dato->format(DATE_COOKIE)} <br>");
            }
        }
    
    return $isChanges;
}
?>