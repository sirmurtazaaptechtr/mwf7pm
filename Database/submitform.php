<?php 
    require("header.php");    
    $name = $email = $url = $address = $gender = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = safe_input($_POST["fullName"]);
        $email = safe_input($_POST["email"]);
        $url = safe_input($_POST["website"]);
        $address = safe_input($_POST["address"]);
        $gender = safe_input($_POST["gender"]);
    }

    $insert_sql = "INSERT INTO forms (name, email, website, address, gender) VALUES ('$name', '$email', '$url', '$address', '$gender')";

    if(mysqli_query($conn,$insert_sql)) {
        echo "1 record inserted";
        header("Location: allforms.php");
        exit;
    }else {
        echo "0 record inserted";
        header("Location: index.php");
        exit;
    }
?>
<?php include("footer.php"); ?>