<?php
    // echo "<pre>";
    // print_r($_FILES);
    // echo "</pre>";

    $target_dir = "images/";
    $target_file = $target_dir . basename($_FILES['fileToUpload']['name']);
    // echo "<p>$target_file</p>";
    $uploadOk = true;

    if($uploadOk) {
        if(move_uploaded_file($_FILES['fileToUpload']['tmp_name'],$target_file)) {
            echo "<p>\"" . basename($_FILES['fileToUpload']['name']) . "\" uploaded successfully!</p>";
        }
    }

?>