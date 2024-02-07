<?php
    // $bytes = readfile("webdictionary.txt");    
    // echo "<p>$bytes</p>";

    $file = fopen("webdictionary.txt","r") or die("Unable to read file");
    // echo fread($file,filesize("webdictionary.txt"));
    while(!feof($file)) {
        echo "<p>" . fgets($file) . "</p>";
    }
    fclose($file);

    $myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
    $txt = "Aptech Learning\n";
    fwrite($myfile, $txt);
    $txt = "Tariq Road\n";
    fwrite($myfile, $txt);
    fclose($myfile);

    $myfile = fopen("newfile.txt", "a") or die("Unable to open file!");
    $txt = "Syed Murtaza Hussain\n";
    fwrite($myfile, $txt);
    $txt = "Faculty Head\n";
    fwrite($myfile, $txt);
    fclose($myfile);
?>