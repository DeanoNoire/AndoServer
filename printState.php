<script>
  
$con = mysqli_connect('sql.endora.cz:3312', 'deano', 'Puschkin3.','states');

if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
  }

$sql = "SELECT * FROM stavy";
$result = mysqli_query($con, $sql);


//$rows = array();

    while($r = mysqli_fetch_assoc($result)) {
  //      $rows[] = $r;
        echo '<div id="s' . $r["typ"] . '">' . $r["hodnota"] . '</div>' ; 


    }

//echo json_encode($rows);




mysqli_close($con);


<script>