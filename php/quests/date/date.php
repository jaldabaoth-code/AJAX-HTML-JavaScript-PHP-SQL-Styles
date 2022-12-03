<?php

$presentTime = new DateTime('', new DateTimeZone('Europe/Paris'));
$destinationTime  = new DateTime('1990-05-01 00:00', new DateTimeZone('Europe/Paris'));
$diff = $presentTime->diff($destinationTime);
$presentTimeMinutes = strtotime($presentTime->format('Y-m-d-H-m'));
$destinationTimeMinutes  = strtotime($destinationTime->format('Y-m-d-H-m'));
$diffMinutes = ($presentTimeMinutes - $destinationTimeMinutes) / 60;
$carburants = $diffMinutes / 10000;
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
            /* Head included */
            include '../../../includes/head.html';
        ?>
        <title>Date</title>
    </head>
    <?php
        /* Navbar included */
        include '../../../includes/navbar.php';
        include '../../includes/bottomNavbar.php';
    ?>
    <body>
        <h1>PHP Date - Quest</h1>
        <h2>Difference between 2 dates</h2>
        <div class="container">
            <div class="row bg-secondary col-12 pt-1">
                <div class="col-3">
                    <div class="col-12 bg-danger text-white text-center">
                        MONTH
                    </div>
                    <div type="text" class="bg-dark text-warning form-control text-center mt-1">
                        <?= strtoupper($destinationTime->format('M')) ?>
                    </div>
                </div>
                <div class="col-2">
                    <div class="col-12 bg-danger text-white text-center">
                        DAY
                    </div>
                    <div type="text" class="bg-dark text-warning form-control text-center mt-1">
                        <?= strtoupper($destinationTime->format('d')) ?>
                    </div>
                </div>
                <div class="col-3">
                    <div class="col-12 bg-danger text-white text-center">
                        YEAR
                    </div>
                    <div type="text" class="bg-dark text-warning form-control text-center mt-1">
                        <?= strtoupper($destinationTime->format('Y')) ?>
                    </div>
                </div>
                <div class="col-2">
                    <div class="col-12 bg-danger text-white text-center">
                        HOUR
                    </div>
                    <div type="text" class="bg-dark text-warning form-control text-center mt-1">
                        <?= strtoupper($destinationTime->format('H')) ?>
                    </div>           
                </div>
                <div class="col-2">
                    <div class="col-12 bg-danger text-white text-center">
                        MINUTE
                    </div>
                    <div type="text" class="bg-dark text-warning form-control text-center mt-1">
                        <?= strtoupper($destinationTime->format('i')) ?>
                    </div>
                </div>
                <div class="col-12 m-2">
                    <div class="col-6 offset-3 bg-dark text-white text-center">
                        DESTINATION
                    </div>
                </div>
                <div class="col-12 border border-dark"></div>
            </div>
            <div class="row bg-secondary col-12 pt-1">
                <div class="col-3">
                    <div class="col-12 bg-danger text-white text-center">
                        MONTH
                    </div>
                    <div type="text" class="bg-dark text-success form-control text-center mt-1">
                        <?= strtoupper($presentTime->format('M')) ?>
                    </div>
                </div>
                <div class="col-2">
                    <div class="col-12 bg-danger text-white text-center">
                        DAY
                    </div>
                    <div type="text" class="bg-dark text-success form-control text-center mt-1">
                        <?= strtoupper($presentTime->format('d')) ?>
                    </div>
                </div>
                <div class="col-3">
                    <div class="col-12 bg-danger text-white text-center">
                        YEAR
                    </div>
                    <div type="text" class="bg-dark text-success form-control text-center mt-1">
                        <?= strtoupper($presentTime->format('Y')) ?>
                    </div>
                </div>
                <div class="col-2">
                    <div class="col-12 bg-danger text-white text-center">
                        HOUR
                    </div>
                    <div type="text" class="bg-dark text-success form-control text-center mt-1">
                        <?= strtoupper($presentTime->format('H')) ?>
                    </div>           
                </div>
                <div class="col-2">
                    <div class="col-12 bg-danger text-white text-center">
                        MINUTE
                    </div>
                    <div type="text" class="bg-dark text-success form-control text-center mt-1">
                        <?= strtoupper($presentTime->format('i')) ?>
                    </div>
                </div>
                <div class="col-12 m-2">
                    <div class="col-6 offset-3 bg-dark text-white text-center">
                        PRESENT
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-6 offset-3 text-center">
                    There are <?= $diff->y ?> years, <?= $diff->m ?> month, <?= $diff->d ?> days, <?= $diff->h ?> hours, <?= $diff->i ?> between the two dates.
                </div>
                <div class="col-6 offset-3 text-center">
                    There are a difference of <?= $diffMinutes ?> minutes, so we need <?= $carburants ?> liters of fuel.
                </div>
            </div>
        </div>
        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    </body>
</html>
