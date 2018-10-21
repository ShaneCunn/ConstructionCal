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
$title = "Construction calculator for base drain "

?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/boostrap.min.css">
    <style>

        body {
            padding-top: 5rem;
        }

        .starter-template {
            padding: 3rem 1.5rem;
            text-align: center;
        }
    </style>

    <title><?= $title ?></title>
</head>
<body>

<main role="main" class="container">
    <div class="container">
        <h2>Object drain table</h2>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>Construction Object</th>
                <th>Drain rate</th>
                <th>Amount</th>
                <th>Sub total:</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($arrayData as $key => $value) : ?>
                <tr>
                    <td><?= $value->name ?></td>
                    <td class="valueAmount"><?= $value->usage ?></td>
                    <td class="quantity">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputGroupSelect01">Amount</label>
                            </div>
                            <select class="custom-select" id="inputGroupSelect01">

                                <?php

                                for ($i = 0; $i <= $value->amount; $i++)
                                    echo '<option value="' . $i . '" class="qty">' . $i . '</option>';
                                ?>
                        </div>
                    </td>
                    <td class="subtotal">0</td>
                </tr>
            <?php endforeach; ?>
            <tr>
                <td>Total:</td>
                <td class="perhour">Per second:10</td>
                <td class="perminute">per minute:20</td>
                <td>
                    <div class="fulltotal" 0
    </div
    </td>
    </tbody>
    </table>
    </div>
</main><!-- /.container -->

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.bundle.js"></script>
<script src="assets/js/custom.js"></script>
`2 <q>`</q>
</body>
</html>
