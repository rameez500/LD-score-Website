<?php
// analysis_run.php

echo "<form action='analysis_run.php' method='post'>";
echo "Enter the Job ID: <input type='text' id='input1' name='input1' required >"; 
echo "<br>";
echo "Enter the File name for Gene: <input type='text' id='input2' name='input2' required >";
echo "<br>";
echo "Enter the File name for Summary stat: <input type='text' id='input3' name='input3' required >";
echo "<br>";
echo "<input type='submit' />";
echo "</form>";


echo "<br>";
//echo "After the analysis is finished, download the files from the following link:  http://35.232.4.40/analysis_download.php";
echo "After the analysis is completed, you can view the results by following this link:  http://34.122.49.0/analysis_result_V3.php";
echo "<br>";
//echo "The result can be viewed after the analysis is finished http://35.232.4.40/analysis_result.php";
echo "<br>";
echo "<br>";
echo  "Please note that the analysis may take 3-4 hours to complete. Additionally, \n
       be aware that the result files will be deleted after 10 days, so kindly ensure you download them before that time";  

//echo  $N_result;
//echo "<br>";
//$targetDir = "/home/princessbaab33/upload/";
//$N_gene = $_POST['N_gene'];
//$targetFile = $targetDir . $N_gene;
//echo "Study PHP at " . $N_gene . "<br>";


if (isset($_POST['input1']) && isset($_POST['input2']) && isset($_POST['input3']) ) 
{
  $input1 = $_POST['input1'];
  $input2 = $_POST['input2'];
  $input3 = $_POST['input3'];

  $targetDir = "/home/princessbaab33/upload/";  // Directory to store uploaded files
  $targetFile = $targetDir . $input2;
  $targetFile_2 = $targetDir . $input3;
  //exec("bash /home/princessbaab33/LDSC/ld_annot_V2.sh $targetFile $N_result/");
  exec("bash /home/princessbaab33/LDSC/ld_annot_V2.sh $targetFile $targetFile_2 $input1/");
  //echo "<br>";
  //echo "Study PHP at " . $targetFile . "<br>";
  //$mergedString = $targetDir. $N_result;
  //echo "<p>Merged String: $targetFile</p>";
  //echo "<br>";
  //echo "<p>Merged String: $targetFile_2</p>";
 
}
//else {
//	echo "<p>Both input fields are required. </p>";
//}
?>
