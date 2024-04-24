<?php include("header.php"); ?>
<body>
    <h1>PHP Form Validation Example</h1>
    <div class="container">
        <!-- General Form Elements -->
        <form method="post" action="submitform.php">
            <div class="row mb-3">
                <label for="fullName" class="col-sm-2 col-form-label">Full Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="fullName" name="fullName" required>
                </div>
            </div>
            <div class="row mb-3">
                <label for="email" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="email" name="email">
                </div>
            </div>
            <div class="row mb-3">
                <label for="website" class="col-sm-2 col-form-label">Website</label>
                <div class="col-sm-10">
                    <input type="url" class="form-control" id="website" name="website">
                </div>
            </div>
            <div class="row mb-3">
                <label for="address" class="col-sm-2 col-form-label">Address</label>
                <div class="col-sm-10">
                    <textarea class="form-control" style="height: 100px" id="address" name="address"></textarea>
                </div>
            </div>
            <fieldset class="row mb-3">
                <legend class="col-form-label col-sm-2 pt-0">Gender</legend>
                <div class="col-sm-10">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="male" value="male" checked>
                        <label class="form-check-label" for="male">
                            Male
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="female" value="female">
                        <label class="form-check-label" for="female">
                            Female
                        </label>
                    </div>
                    <div class="form-check disabled">
                        <input class="form-check-input" type="radio" name="gender" id="others" value="others">
                        <label class="form-check-label" for="others">
                            Others
                        </label>
                    </div>
                </div>
            </fieldset>

            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Submit Button</label>
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary" id="submitBtn" name="submitBtn">Submit Form</button>
                </div>
            </div>

        </form><!-- End General Form Elements -->
    </div>

    <?php include("footer.php"); ?>