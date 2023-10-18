<html>
<body>
    <h1>Verify Upload File</h1>
        <?php
        $targetDir = "/home/princessbaab33/upload/";  // Directory to store uploaded files
        $targetFile = $targetDir . basename($_FILES["fileToUpload"]["name"]);
        $targetFile2 = $targetDir . basename($_FILES["sumStat"]["name"]);

        // Check if file was successfully uploaded
        if ( (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)) && (move_uploaded_file($_FILES["sumStat"]["tmp_name"], $targetFile2)) ) {
                // echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
		echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " and the file ". basename( $_FILES["sumStat"]["name"]). " has been uploaded.";
                echo "<br>";
                $randomNumber = rand();
                $directoryName = "r_" . $randomNumber;
                $command = "mkdir " . $directoryName;
                $output = exec($command);
		echo "Here is your Job ID " . $directoryName;
		echo "<br>";
		echo "<br>";  
		echo "Please copy the Job ID and paste in the website http://34.122.49.0/analysis_run.php";

               
  
      } else {
                echo "Sorry, there was an error uploading your file.";
        }
        ?>

</body>
</html>
