<?php
$name = "kusuma yuda";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="asset/css/bootstrap.min.css">
    <link rel="stylesheet" href="asset/css/all.css">
    <style>
        
    </style>
    <title>TeamTreeHouse <?php echo $name;?></title>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="sidebar col-lg-4 border bg-dark">
                <div class="d-flex flex-column">
                    <img class="d-flex align-self-center" src="image/nyong.jpg" alt="nyong" width="90px">
                </div>
                <div class="d-flex flex-column m-5">
                    <div class="d-flex align-self-center">
                        <p class="h2 text-align"><?php echo $name; ?></p>
                    </div>
                </div>
            </div>
            <div class="content col-lg-8 border vh-100 pl-5">
            <div class="d-flex flex-column">
                <p class="h2">my first page PHP</p>
                <section>
                    <p class="h2">unit</p>
                    <?php include "inc/units.php";?>
                    <p class="lead"><?php celciusToFahrenheit(80);?></p>
                </section>

                <section>
                    <p class="h2">string</p>
                    <?php include "inc/string.php";?>
                    <p class="lead"><?php echo askName("AhMaD DhAnI SAPUTRO\n");?></p>
                </section>
            </div>
            <div class="d-flex flex-column  position-absolute fixed-bottom">
                <p class="mx-auto d-block">&copy;<?php echo $name; echo" last modivied:".date("d m yy H:i:s.", getlastmod() ); ?></p>
            </div>
            </div>
        </div>
    </div>
            <script src="asset/js/jquery-3.5.1.slim.min.js"></script>
            <script src="asset/js/popper.min.js"></script>
            <script src="asset/js/bootstrap.min.js"></script>
</body>
</html>