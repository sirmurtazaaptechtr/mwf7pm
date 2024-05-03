<?php include("header.inc.php"); ?>
<main id="main" class="main">

    <div class="pagetitle">
        <h1>Add New Customer</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                <li class="breadcrumb-item"><a href="customers.php">Customers</a></li>
                <li class="breadcrumb-item">Add new customer</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Add New Customer Details</h5>

                        <!-- Add New Customer -->
                        <form>
                            <div class="row mb-3">
                                <label for="customerName" class="col-sm-2 col-form-label">Customer Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="customerName" name="customerName">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="contactName" class="col-sm-2 col-form-label">Contact Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="contactName" name="contactName">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="street" class="col-sm-2 col-form-label">Street</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" style="height: 100px" id="street" name="street"></textarea>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="city" class="col-sm-2 col-form-label">City</label>
                                <div class="col-sm-10">
                                    <input class="form-control" list="citylistOptions" id="city" placeholder="Type to search...">
                                    <datalist id="citylistOptions">
                                        <option value="San Francisco">
                                        <option value="New York">
                                        <option value="Seattle">
                                        <option value="Los Angeles">
                                        <option value="Chicago">
                                    </datalist>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="postcode" class="col-sm-2 col-form-label">Post Code</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="postcode" name="postcode">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="country" class="col-sm-2 col-form-label">Country</label>
                                <div class="col-sm-10">
                                    <input class="form-control" list="countrylistOptions" id="country" placeholder="Type to search...">
                                    <datalist id="countrylistOptions">
                                        <option value="Pakistan">
                                        <option value="Dubai">
                                        <option value="UK">
                                        <option value="USA">
                                        <option value="Germany">
                                    </datalist>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Submit Button</label>
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary">Submit Form</button>
                                </div>
                            </div>

                        </form><!-- End Add New Customer -->

                    </div>
                </div>

            </div>
        </div>
    </section>

</main><!-- End #main -->
<?php include("footer.inc.php"); ?>