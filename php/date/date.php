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
            /* head included */
            include '../includes/head.html';
        ?>
        <link rel="stylesheet" href="../assets/styles/formStyle.css">
        <title>Date</title>
    </head>
    <?php
        /* navbar included */
        include '../includes/navbar.php';
    ?>
    <body>
        <h2>Différence entre 2 dates</h2>
        <div class="container">
            <div class="row bg-secondary col-12 pt-1">
                <div class="col-3">
                    <div class="col-12 bg-danger text-white text-center">
                        MOIS
                    </div>
                    <div type="text" class="bg-dark text-warning form-control text-center mt-1">
                        <?= strtoupper($destinationTime->format('M')) ?>
                    </div>
                </div>
                <div class="col-2">
                    <div class="col-12 bg-danger text-white text-center">
                        JOUR
                    </div>
                    <div type="text" class="bg-dark text-warning form-control text-center mt-1">
                        <?= strtoupper($destinationTime->format('d')) ?>
                    </div>
                </div>
                <div class="col-3">
                    <div class="col-12 bg-danger text-white text-center">
                        ANNEE
                    </div>
                    <div type="text" class="bg-dark text-warning form-control text-center mt-1">
                        <?= strtoupper($destinationTime->format('Y')) ?>
                    </div>
                </div>
                <div class="col-2">
                    <div class="col-12 bg-danger text-white text-center">
                        HEURE
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
                        MOIS
                    </div>
                    <div type="text" class="bg-dark text-success form-control text-center mt-1">
                        <?= strtoupper($presentTime->format('M')) ?>
                    </div>
                </div>
                <div class="col-2">
                    <div class="col-12 bg-danger text-white text-center">
                        JOUR
                    </div>
                    <div type="text" class="bg-dark text-success form-control text-center mt-1">
                        <?= strtoupper($presentTime->format('d')) ?>
                    </div>
                </div>
                <div class="col-3">
                    <div class="col-12 bg-danger text-white text-center">
                        ANNEE
                    </div>
                    <div type="text" class="bg-dark text-success form-control text-center mt-1">
                        <?= strtoupper($presentTime->format('Y')) ?>
                    </div>
                </div>
                <div class="col-2">
                    <div class="col-12 bg-danger text-white text-center">
                        HEURE
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
                    Il y a <?= $diff->y ?> annnées, <?= $diff->m ?> mois, <?= $diff->d ?> jours, <?= $diff->h ?> heures, <?= $diff->i ?> minutes entre les deux dates.
                </div>
                <div class="col-6 offset-3 text-center">
                    Il y a <?= $diffMinutes ?> minutes de difference, donc il faut <?= $carburants ?> litres de carburants.
                </div>
            </div>
        </div>
        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    </body>
</html>
