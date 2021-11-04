<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>

<h1>Deano Gater server</h1>

<form id="gate" action="">
<input type="number" name="pin">
<input type="submit" id="submit" name="submit">
</form>

<form id="garage" action="">
<input type="number" name="pin">
<input type="submit" id="submit" name="submit">
</form>

<form id="stater" action="">
<input type="number" name="pin">
<input type="number" name="stav">
<input type="text" name="typ">
<input type="submit" id="submit" name="submit">
</form>


<div id="states">
</div>

<div id="logger">
</div>

<script>
  $('document').ready(function() {
$("#states").load("printState.php");
});
</script>

<script>
$('#gate').on("submit",function(e) {
  var post_data = $('#gate').serialize();
  $.ajax({
      type: "POST",
      url: "doGate.php",
      data: post_data,
      success: function(data){
        $('#logger').html(data.result);
      }
  });
  e.preventDefault();
});


$('#garage').on("submit",function(e) {
  var post_data = $('#garage').serialize();
  $.ajax({
      type: "POST",
      url: "doGarage.php",
      data: post_data,
      success: function(data){
        $('#logger').html(data.result);
      }
  });
  e.preventDefault();
});



$('#stater').on("submit",function(e) {
  var post_data = $('#stater').serialize();
  $.ajax({
      type: "POST",
      url: "writeNewState.php",
      data: post_data,
      success: function(data){
        $('#logger').html(data.result);
      }
  });
  e.preventDefault();
});

</script>





</body>
</html>
