<?php
// test.php

echo "<form action='test.php' method='get'>";
echo "Number values to generate: <input type='text' name='N' />";
echo "<input type='submit' />";
echo "</form>";

if(isset($_GET['N']))
{
  $N = $_GET['N'];

  // execute R script from shell
  // this will save a plot at temp.png to the filesystem
  exec("/usr/bin/Rscript code_1.R $N");

  // return image tag
  $nocache = rand();
  echo("<img src='temp10.png?$nocache' />");
}
?>
