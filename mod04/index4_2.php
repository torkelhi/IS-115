<html>
    <body>
    <h4> <a href="./index.php">Tilbake til Oppgave Oversikt</a> </h4>
    <form method="post">
            <label for="fornavn">Fornavn</label>
            <input type="text" name="fornavn"/>

            <label for="etternavn">Etternavn</label>
            <input type="text" name="etternavn"/>

            <label for="email">Email</label>
            <input type="email" name="email"/>

            <label for="tlf-nummer">Nummer</label>
            <input type="text" name="tlf-nummer"/>

            <input type="submit" name="formsub" value="send"/>
        </form>
    </body>

    <?php 
    $brukere = array();
    
    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        function validate(){
            if($_POST['formsub']){
                $valid = true;

                $errosMsg = array();

                if(!$_POST['fornavn']){
                    $errosMsg['Fornavn'] = 'Mangler fornavn';
                    $valid = false;
                }
                if(!$_POST['etternavn']){
                    $errosMsg['Etternavn'] = 'Mangler etternavn';
                    $valid = false;
                }
                if(!$_POST['email']){
                    $errosMsg['Email'] = 'Mangler email';
                    $valid = false;
                }
                if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) && $_POST['email']) {
                    $errosMsg['Email-Format'] = 'feil format på email';
                    $valid = false;
                }
                if(!$_POST['tlf-nummer']){
                    $errosMsg['Tlf-nummer'] = 'Mangler tlf-nummer';
                    $valid = false;
                }

                if(strlen($_POST['tlf-nummer']) < 8 && $_POST['tlf-nummer']){
                    $errosMsg['Kort Tlf-nummer'] = 'Ikke nok sifre i tlf nummer';
                    $valid = false;
                }
                if(strlen($_POST['tlf-nummer']) > 8  && $_POST['tlf-nummer']){
                    $errosMsg['Langt Tlf-nummer'] = 'For mange sifre i tlf nummer';
                    $valid = false;
                }

                foreach($errosMsg as $label => $msg){
                    print_r("$label : $msg <br>");
                }

                return $valid;
            }
        }


        if(validate()){
            $bruker = array(
                'Fornavn' =>  $_POST['fornavn'],
                'Etternavn' => $_POST['etternavn'],
                'Email' => $_POST['email'],
                'Nummer' => $_POST['tlf-nummer'],
            );

            array_push($brukere, $bruker);

            foreach($brukere as $bruker => $brukerObj) {
                foreach($brukerObj as $brukerKeys => $val){
                    print_r("$brukerKeys : $val <br>");
                }
            }
        }
    }
    ?>

</html>