<?php
include("include/header.php");

$sql = "SELECT * FROM `forms`";
$data = mysqli_query($conn, $sql);
?>

<div class="container">

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>All Forms</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active">Persons</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row mb-3">
                <!-- <label class="col-sm-2 col-form-label">Submit Button</label> -->
                <div class="col-sm-10">
                    <a type="button" class="btn btn-primary" href="addperson.php">
                        + Add New Person
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">All Forms</h5>

                            <!-- Table with stripped rows -->
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">ID</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Gender</th>
                                        <th scope="col">Website</th>
                                        <th scope="col">Address</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $srno = 1;
                                    while ($row = mysqli_fetch_assoc($data)) {
                                    ?>
                                        <tr>
                                            <th scope="row"><?php echo $srno; ?></th>
                                            <td><?php echo $row['id'] ?></td>
                                            <td><?php echo $row['name'] ?></td>
                                            <td><?php echo $row['email'] ?></td>
                                            <td><?php echo $row['gender'] ?></td>
                                            <td><?php echo $row['website'] ?></td>
                                            <td><?php echo $row['address'] ?></td>
                                            <td>
                                                <div class="btn-group">
                                                    <a type="button" class="btn btn-info" href="editperson.php?ID=<?php echo $row['id']?>">Edit</a>
                                                    <a type="button" class="btn btn-danger">Delete</a>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php
                                        $srno++;
                                    }
                                    ?>
                                </tbody>
                            </table>
                            <!-- End Table with stripped rows -->

                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main><!-- End #main -->
</div>

<?php include("include/footer.php"); ?>