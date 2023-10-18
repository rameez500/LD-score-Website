<?php
// analysis_result.php

echo "<form action='analysis_result.php' method='get'>";
echo "Job IDs: <input type='text' name='result' />";
echo "<input type='submit' />";
echo "</form>";

$targetDir  = $_GET['result'];
$N_result = "/results2.results";
$file_path = $targetDir . $N_result;


if (file_exists($file_path)) {
    $file_contents = file_get_contents($file_path);
    echo "<h1>File Exists</h1>";
    $output = shell_exec("cat " . $file_path);
    echo "<pre>$output</pre>";
    
}

echo "<br>";
echo "<br>";
?>
