<?php
/**
 * Created by PhpStorm.
 * User: shane
 * Date: 17/10/2018
 * Time: 17:56
 */


$url = 'values.json';
$data = file_get_contents($url);
$arrayData = json_decode($data);
$title = "Construction calculator for base drain"

?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
    <!-- Bootstrap CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="assets/css/light-bootstrap-dashboard.css?v=2.0.1" rel="stylesheet"/>
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="assets/css/demo.css" rel="stylesheet"/>
    <style>
        .hidden {
            display: none;
            visibility: hidden;
        }
    </style>
    <title><?= $title ?></title>
</head>
<body>

<main role="main" class="container">
    <div class="container">
        <div class="card-body table-full-width table-responsive">
            <table class="table table-hover table-striped">

                <div class="card-header ">
                    <h4 class="card-title"><?= $title ?></h4>

                    <p class="card-category">This is a very simple calculator for working out how much Cortium you are
                        currently using</p>
                    <div class="row">
                        <div class="col perhour font-weight-bold">10</div>
                        <div class="col perminute font-weight-bold">0</div>
                        <div class="col fulltotal font-weight-bold">0</div>
                    </div>

                </div>
                <thead>
                <tr>
                    <th>Construction Object</th>
                    <th>Drain rate</th>
                    <th>Amount</th>
                    <th class="hidden">Sub total:</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Cortium Silo</td>
                    <td class="valueAmount">2</td>
                    <td class="quantity">
                        <div class="input-group mb-3">
                            <select class="custom-select" id="inputGroupSelect01">

                                <option value="0" class="qty">1</option>
                                <option value="1" class="qty">1</option>
                        </div>
                    </td>
                    <td class="subtotal hidden">2</td>
                </tr>
                <?php foreach ($arrayData as $key => $value) : ?>
                    <tr>
                        <td><?= $value->name ?></td>
                        <td class="valueAmount"><?= $value->usage ?></td>
                        <td class="quantity">
                            <div class="input-group mb-3">
                                <select class="custom-select" id="inputGroupSelect01">

                                    <?php

                                    for ($i = 0; $i <= $value->amount; $i++)
                                        echo '<option value="' . $i . '" class="qty">' . $i . '</option>';
                                    ?>
                            </div>
                        </td>
                        <td class="subtotal hidden">0</td>
                    </tr>
                <?php endforeach; ?>


                </tbody>
            </table>
        </div>
    </div>

</main><!-- /.container -->

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.bundle.js"></script>
<script src="assets/js/custom.js"></script>
</body>
</html>
