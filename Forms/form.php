<?php
function pr($input) {
    echo "<pre>";        
    print_r($input);
    echo "</pre>";        
}

$fname = $lname = $email = $dob = "";

if(isset($_REQUEST["savebtn"]) && $_REQUEST["savebtn"] == "Save") {
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $email = $_POST["email"];
    $dob = $_POST["dob"];
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="form.php" method="post">
        <label for="fname"><b>First Name : </b></label>
        <input type="text" name="fname" id="fname" value="<?php echo $fname;?>">
        <br><br>
        <label for="lname"><b>Last Name : </b></label>
        <input type="text" name="lname" id="lname" value="<?php echo $lname;?>">
        <br><br>
        <label for="email"><b>Email : </b></label>
        <input type="email" name="email" id="email" value="<?php echo $email;?>">        
        <br><br>
        <label for="dob"><b>Date of Birth : </b></label>
        <input type="date" name="dob" id="dob" value="<?php echo $dob;?>">        
        <br><br>
        <input type="submit" value="Save" name="savebtn">
    </form>
    <div>
        <ul>
            <li><b>FIRST NAME : </b> <?php echo $fname; ?></li>
            <li><b>LAST NAME : </b> <?php echo $lname; ?></li>
            <li><b>EMAIL : </b> <?php echo $email; ?></li>
            <li><b>DATE OF BIRTH : </b> <?php echo $dob; ?></li>
        </ul>
        
    </div>
</body>
</html>