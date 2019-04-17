<?php
  include("var.php");

  foreach ($data as $key1 => $value1) {
    echo "<h2>".$value1["question"]."</h2><br>";
    echo "<p>".$value1["answer"]."</p><br>";
  }
 ?>
