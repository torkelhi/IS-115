<html>
    <body>
    <h4> <a href="./index.php">Tilbake til Oppgave Oversikt</a> </h4>
    <form method="post">
             <label for="email">Email</label>
            <input type="email" name="email"/>
            <br>
            <label for="fornavn">Fornavn</label>
            <input type="text" name="fornavn" />
            <br>
            <label for="etternavn">Etternavn</label>
            <input type="text" name="etternavn" />
            <br>
            <label for="emne">Emne</label>
            <input type="text" name="emne"/>
            <br>
            <label for="msg">Melding</label>
            <textarea name="msg"cols="30" rows="10"> </textarea>
            <br>
            <input type="submit" name="formsub" value="send"/>
        </form>
    </body>

    <?php 
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_SESSION["Email"] = $_POST['email'];
            $_SESSION["Fornavn"] =  $_POST['fornavn'];
            $_SESSION["Etternavn"] =  $_POST['etternavn'];
            $_SESSION["Emne"] = $_POST['emne'];
            $_SESSION["Melding"] = $_POST['msg'];

            foreach ($_SESSION as $label => $data) {
                print_r("$label : $data <br>");
            }
    }
    ?>
</html>