<?php
require_once 'functions.php';

$result = queryMysql("SELECT id,quote,quoter from quotes order by id desc");
$num    = $result->num_rows;
echo "<br>";
for ($j = 0 ; $j < $num ; ++$j)
{
  $row = $result->fetch_array(MYSQLI_BOTH);

  echo "<div class='quotecontainer'>";
  $id=$row['id'];
  echo "<div id='$id'class='quote' >#" . $row['id'] . ": ". $row['quote'] . "</div>";
  echo "<div class='quoter' >-" . $row['quoter'] . "</div>";
  echo "<img  class='trashImg' src='images/trash32.png' height='16'><br>";
  echo "</div>";
}

 ?>
