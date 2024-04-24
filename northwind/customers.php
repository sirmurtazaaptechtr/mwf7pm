<?php
include("header.inc.php");

$select_sql = "SELECT * FROM `customers`";
$data = mysqli_query($conn, $select_sql);
?>
<div class="container">
    <table class="table table-hover table-striped table-bordered">
        <thead>
            <tr>
                <th>Sr. #</th>
                <th>Customer ID</th>
                <th>Customer Name</th>
                <th>Contact Name</th>
                <th>Street</th>
                <th>City</th>
                <th>Post Code</th>
                <th>Country</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $srno = 1;
            while($row = mysqli_fetch_assoc($data)){
            ?>
            <tr>
                <td><?php echo $srno; ?></td>
                <td><?php echo $row['CustomerID']; ?></td>
                <td><?php echo $row['CustomerName']; ?></td>
                <td><?php echo $row['ContactName']; ?></td>
                <td><?php echo $row['Address']; ?></td>
                <td><?php echo $row['City']; ?></td>
                <td><?php echo $row['PostalCode']; ?></td>
                <td><?php echo $row['Country']; ?></td>
            </tr>
            <?php
                $srno++;
            }
            ?>
        </tbody>
    </table>
</div>