<?php
function pr($input) {
    echo "<pre>";        
    print_r($input);
    echo "</pre>";        
}
function safe_input ($input) {
    $input = trim($input);
    $input = htmlspecialchars($input);
    $input = stripslashes($input);
    return $input;
}

$fname = $lname = $email = $dob = "";
$fnameErr = $lnameErr = $emailErr = $dobErr = "";

if(isset($_REQUEST["savebtn"]) && $_REQUEST["savebtn"] == "Save") {
    if(!empty($_POST["fname"])) {
        $fname = safe_input($_POST["fname"]);
    }else {
        $fnameErr = "name is required!";
    }

    if(!empty($_POST["lname"])) {        
        $lname = safe_input($_POST["lname"]);
    }

    if(!empty($_POST["email"])) {
        $email = safe_input($_POST["email"]);
    }else {
        $emailErr = "email is required!";
    }

    if(!empty($_POST["dob"])) {
        $dob = safe_input($_POST["dob"]);
    }else {
        $dobErr = "select you date of birth";
    }

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .error {
            color: red;
        }
    </style>
</head>
<body>
    <p class="error">Required *</p>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
        <label for="fname"><b>First Name : </b></label>
        <input type="text" name="fname" id="fname" value="<?php echo $fname;?>">
        <span class="error">* <?php echo $fnameErr; ?></span>
        <br><br>
        <label for="lname"><b> Last Name : </b></label>
        <input type="text" name="lname" id="lname" value="<?php echo $lname;?>">
        <br><br>
        <label for="email"><b>Email : </b></label>
        <input type="email" name="email" id="email" value="<?php echo $email;?>">        
        <span class="error">* <?php echo $emailErr; ?></span>
        <br><br>
        <label for="dob"><b>Date of Birth : </b></label>
        <input type="date" name="dob" id="dob" value="<?php echo $dob;?>">        
        <span class="error">* <?php echo $dobErr; ?></span>
        <br><br>
        <input type="submit" value="Save" name="savebtn">
    </form>
    <div>
        <?php        
        // pr($_SERVER);
        // pr($_REQUEST);
        // pr($_GET);
        // pr($_POST);
        if(isset($_REQUEST["savebtn"]) && $_REQUEST["savebtn"] == "Save") {
            if(empty($fnameErr) && empty($emailErr) && empty($dobErr)) {
                ?>
                <h2>Your Information</h2>
                <ul>
                    <li><b>FIRST NAME : </b> <?php echo $fname; ?></li>
                    <li><b>LAST NAME : </b> <?php echo $lname; ?></li>
                    <li><b>EMAIL : </b> <?php echo $email; ?></li>
                    <li><b>DATE OF BIRTH : </b> <?php echo $dob; ?></li>
                </ul>
                <?php
            }
        }
        ?>

        
        
    </div>
</body>
</html>