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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css"
          integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <style>
        .hidden {
            display: none;
            visibility: hidden;
        }

        .counter {
            background-color: #f5f5f5;
            padding: 20px 0;
           /* border-radius: 5px;*/
        }

        .count-title {
            font-size: 40px;
            font-weight: normal;
            margin-top: 10px;
            margin-bottom: 0;
            text-align: center;
            margin-left: 20px;
        }

        .count-text {
            font-size: 13px;
            font-weight: normal;
            margin-top: 10px;
            margin-bottom: 0;
            text-align: center;
        }


    </style>
    <title><?= $title ?></title>
</head>
<body>

<main role="main" class="container">
    <div class="container">
        <div class="card-body table-full-width table-responsive">
            <table class="table table-hover table-striped">


                <h4 class="card-title"><?= $title ?></h4>

                <p class="card-category">This is a very simple calculator for working out how much Cortium you are
                    currently using</p>

                <div class="row text-center">


                        <div class="col counter">
                            <h2 class="perhour timer count-title count-number"></h2>
                            <p class="count-text">Per hour</p>
                        </div>

                        <div class="col counter">
                            <h2 class="perminute timer count-title count-number"></h2>
                            <p class="count-text ">Per minute</p>
                        </div>

                        <div class="col counter">
                            <h2 class="fulltotal timer count-title count-number"></h2>
                            <p class="count-text ">Per second</p>
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


                                <option value="1" class="qty" selected>1</option>
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
