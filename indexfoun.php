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
$title = "Base drain calculator";
$subtitle = 'A simple calculator for base drain'

?>


<!doctype html>
<html class="no-js" lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
    <title><?= $title ?></title>
    <link rel="stylesheet" href="assets/css/foundation.css">
    <link rel="stylesheet" href="assets/css/app.css">
</head>
<body>



<div class="callout large primary">
    <div class="text-center">
        <h1><?= $title ?></h1>
        <h2 class="subheader"><?= $subtitle ?></h2>
    </div>
</div>

<div class="grid-container">
    <div class="grid-x align-center">
        <div class="cell medium-10">
            <table>
                <thead>
                <tr>
                    <th>Per hour</th>
                    <th>Per minute</th>
                    <th width="500">Amount</th>

                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Content Goes Here</td>

                    <td>Content Goes Here</td>
                    <td>
                        <div class="grid-x grid-margin-x">
                            <div class="cell small-8">
                                <div class="slider" data-slider data-initial-start="0" data-end="10">
                                        <span class="slider-handle" data-slider-handle role="slidergit" tabindex="1"
                                              aria-controls="sliderOutput1"></span>
                                    <span class="slider-fill" data-slider-fill></span>
                                </div>
                            </div>
                            <div class="cell small-4">
                                <input type="number" id="sliderOutput1">
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Content Goes Here</td>

                    <td>Content Goes Here</td>
                    <td>Content Goes Here</td>
                </tr>
                <tr>
                    <td>Content Goes Here</td>

                    <td>Content Goes Here</td>
                    <td>Content Goes Here</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>




<script src="assets/js/vendor/jquery.js"></script>
<script src="assets/js/vendor/what-input.js"></script>
<script src="assets/js/vendor/foundation.js"></script>
<script src="assets/js/app.js"></script>
</body>
</html>

