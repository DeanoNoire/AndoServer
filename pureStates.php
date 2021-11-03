<html>
<body>


<?php
$con = mysqli_connect('sql.endora.cz:3312', 'deano', 'Puschkin3.','states');

if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
  }

$sql = "SELECT * FROM stavy";
$result = mysqli_query($con, $sql);


  while($r = mysqli_fetch_assoc($result)) {
        echo '<div id="s' . $r["typ"] . '">' . $r["hodnota"] . '</div>' ; 


    }





mysqli_close($con);


?>

</body>
</html>
