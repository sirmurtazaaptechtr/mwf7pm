<?php
$file = fopen("cd.json","r");
$cdjson = fread($file,filesize("cd.json"));
$cd = json_decode($cdjson);

// echo "<pre>";
// print_r($cd);
// echo "</pre>";
?>
<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>    
    <div class="container mt-3">
        <h1 class="display-1 text-center">Aptech CD Shop</h1>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>SR #</th>
                    <th>TITLE</th>
                    <th>ARTIST</th>
                    <th>COUNTRY</th>
                    <th>COMPANY</th>
                    <th>PRICE</th>
                    <th>YEAR</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach($cd as $i => $data) {            
                    ?>
                <tr>
                    <td><?php echo $i+1; ?></td>
                    <td><?php echo $data->TITLE; ?></td>
                    <td><?php echo $data->ARTIST; ?></td>
                    <td><?php echo $data->COUNTRY; ?></td>
                    <td><?php echo $data->COMPANY; ?></td>
                    <td><?php echo $data->PRICE; ?></td>
                    <td><?php echo $data->YEAR; ?></td>
                </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>