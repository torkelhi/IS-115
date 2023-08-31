<h4> <a href="./index.php">Tilbake til Oppgave Oversikt</a> </h4>
<?php

class Jobbannonse{
    public $overskrift;
    public $beskrivelse;
    public $frist;
    public $sted;

    function __construct($overskrift, $beskrivelse, $frist, $sted) {
        $this->overskrift = $overskrift;
        $this->beskrivelse = $beskrivelse;
        $this->frist = new DateTime("$frist");
        $this->sted = $sted;
      }
      
      function show(){
        echo "<table style='border-style: solid; border-color: black; padding: 20px; width: 500px;'>";
        echo "<tr> <th> {$this->overskrift}  </th> </tr >";
        echo "<tr> <td> Beskrivelse: {$this->beskrivelse}</td> </tr>";
        echo "<tr> <td> Frist: {$this->frist->format("Y.m.d")} </td> </tr>";
        echo "<tr> <td> Lokasjon: {$this->sted } </td> </tr>";
        echo "</table>";
        
      }
}
$it= new Jobbannonse("IT-konsulent hos knowit","Intern-prosjekter i firma","2023-10-05","Bergen");
$advokat= new Jobbannonse("Advokat","Advokat fullmektig","2024-01-01","Oslo");
$politi= new Jobbannonse("Pratrulje Leder","Ansvarlig for forvaltning av arbeidskraft til oppdrag","2023-12-01","Finnmark");

$jobbannonser = array($it,$advokat,$politi);

foreach($jobbannonser as $jobbannonse) {
    $jobbannonse->show();
    echo "<br>";
}
?>