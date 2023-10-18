<!DOCTYPE html>
<html>
<head>
    <title>Merged Strings</title>
</head>
<body>
    <?php
    if (isset($_POST['input1']) && isset($_POST['input2'])) {
        $input1 = $_POST['input1'];
        $input2 = $_POST['input2'];
        $input2 = $_POST['input3'];
        $targetDir = "/home/pathway/upload/";
        $mergedString = $input1 . ' ' . $targetDir . $input2;
        $targetFile = $targetDir . $input1;
        $targetFile_2 = $targetDir . $input2;
        
       // echo "<p>Merged String: $mergedString</p>";
        echo "<p>Merged String: $targetFile</p>";
        echo "<br>";
        echo "<p>Merged String: $targetFile_2</p>";    
    } else {
        echo "<p>Both input fields are required.</p>";
    }
    ?>
</body>
</html>
