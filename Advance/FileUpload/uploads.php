<?php
    echo "<pre>";
    print_r($_FILES);
    echo "</pre>";
    // die();
    

    $uploadErr = [];

    $target_dir = "images/";
    $target_file = $target_dir . basename($_FILES['fileToUpload']['name']);
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    // echo "<p>$target_file</p>";
    $uploadOk = true;
    
    // Check if file already exists
    if(file_exists($target_file)) {
        array_push($uploadErr,"<p>Sorry, file already exists.</p>");
        $uploadOk = false;
    }

    // Check file size not > 1MB i.e 1048576 bytes
    if($_FILES["fileToUpload"]["size"] > 1048576) {
        array_push($uploadErr,"<p>Sorry, your file is too large.</p>");
        $uploadOk = false;
    }

    // Allow certain file formats
    if(!($imageFileType == "png" || $imageFileType == "jpg" || $imageFileType == "bmp")) {
        array_push($uploadErr,"<p>Sorry, only JPG, PNG & BMP files are allowed.</p>");
        $uploadOk = false;
    }
    
    if($uploadOk) {
        if(move_uploaded_file($_FILES['fileToUpload']['tmp_name'],$target_file)) {
            echo "<p>\"" . basename($_FILES['fileToUpload']['name']) . "\" uploaded successfully!</p>";
        }
    }else {        
        foreach($uploadErr as $err) {
            echo $err;
        }
    }

?>