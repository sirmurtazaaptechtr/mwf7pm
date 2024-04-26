<?php
include("include/header.php");
$id = $name = $email = $url = $address = $gender = "";

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $id = safe_input($_GET['ID']);
    $select_sql = "Select * FROM  `forms` where ID = $id";
    $data = mysqli_query($conn, $select_sql);
    $row = mysqli_fetch_assoc($data);
    
    $id = safe_input($row['id']);
    $name = safe_input($row['name']);
    $email = safe_input($row['email']);
    $url = safe_input($row['website']);
    $address = safe_input($row['address']);
    $gender = safe_input($row['gender']);
}

if (isset($_REQUEST['updateBtn'])) {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $id = safe_input($_POST["pid"]);
        $name = safe_input($_POST["fullName"]);
        $email = safe_input($_POST["email"]);
        $url = safe_input($_POST["website"]);
        $address = safe_input($_POST["address"]);
        $gender = safe_input($_POST["gender"]);        
    }
    // prx($_POST);    

    $update_sql = "UPDATE `forms` SET`name` = '$name',`email` = '$email', `website` = '$url',`address` = '$address',`gender` = '$gender' WHERE `id` = '$id'";

    if (mysqli_query($conn, $update_sql)) {
        echo "1 record updated";
        header("Location: persons.php");
        exit;
    } else {
        echo "0 record updated";
        header("Location: editperson.php");
        exit;
    }
}
?>

<body>
    <h1>PHP Form Validation Example</h1>
    <div class="container">
        <main id="main" class="main">

            <div class="pagetitle">
                <h1>Add New Person</h1>
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item"><a href="persons.php">Persons</a></li>
                        <li class="breadcrumb-item active">Persons</li>
                    </ol>
                </nav>
            </div><!-- End Page Title -->

            <section class="section">
                <!-- General Form Elements -->
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <div class="row mb-3">
                        <label for="pid" class="col-sm-2 col-form-label">ID</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control-plaintext" id="pid" name="pid" value="<?php echo $id; ?>" readonly>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="fullName" class="col-sm-2 col-form-label">Full Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="fullName" name="fullName" value="<?php echo $name; ?>" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="email" name="email" value="<?php echo $email; ?>">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="website" class="col-sm-2 col-form-label">Website</label>
                        <div class="col-sm-10">
                            <input type="url" class="form-control" id="website" name="website" value="<?php echo $url; ?>">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="address" class="col-sm-2 col-form-label">Address</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" style="height: 100px" id="address" name="address"><?php echo $address; ?></textarea>
                        </div>
                    </div>
                    <fieldset class="row mb-3">
                        <legend class="col-form-label col-sm-2 pt-0">Gender</legend>
                        <div class="col-sm-10">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" id="male" value="male" <?php if (isset($gender) && $gender == "male") echo "checked"; ?>>
                                <label class="form-check-label" for="male">
                                    Male
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" id="female" value="female" <?php if (isset($gender) && $gender == "female") echo "checked"; ?>>
                                <label class="form-check-label" for="female">
                                    Female
                                </label>
                            </div>
                            <div class="form-check disabled">
                                <input class="form-check-input" type="radio" name="gender" id="others" value="others" <?php if (isset($gender) && $gender == "others") echo "checked"; ?>>
                                <label class="form-check-label" for="others">
                                    Others
                                </label>
                            </div>
                        </div>
                    </fieldset>

                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Update Button</label>
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary" id="updateBtn" name="updateBtn">Update</button>
                        </div>
                    </div>

                </form><!-- End General Form Elements -->
            </section>

        </main><!-- End #main -->
    </div>

    <?php include("include/footer.php"); ?>