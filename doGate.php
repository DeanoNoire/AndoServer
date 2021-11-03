<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysqli = mysqli_connect('sql.endora.cz:3312', 'deano', 'Puschkin3.','states');


$pin = $_POST['pin'];

// Ověření klíče
$sql_pin_check = "SELECT 1 as result from klice where typ='gate' and klic='$pin' LIMIT 1";

$vysledek_overeni = mysqli_query($mysqli, $sql_pin_check);

$vysledek_overeni_pocet = mysqli_num_rows($vysledek_overeni);

if ($vysledek_overeni_pocet == 1)
{
   
    $sql_zmena = "UPDATE stavy set hodnota = 69 where typ='gate'";
    $rs = mysqli_query($mysqli, $sql_zmena);
   
    echo "Changing";

} else {
    echo "Wrong PWD";
  }

  mysqli_close($mysqli);

?>