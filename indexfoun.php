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
                    <th>Amount</th>

                </tr>
                </thead>
                <tbody>
                <tr>
                    <td id="namesilo">Cortium Silo</td>

                    <td id="amountsilo">2</td>
                    <td>
                        <div class="grid-x grid-margin-x">
                            <div class="cell small-8">
                                <div class="slider" data-slider data-initial-start="0" data-end="10" id="test">
                                        <span class="slider-handle" data-slider-handle role="slidergit" tabindex="1"
                                              aria-controls="sliderOutputsilo" aria-valuenow="5"></span>
                                    <span class="slider-fill" data-slider-fill></span>
                                </div>
                            </div>
                            <div class="cell small-4">
                                <input type="number" id="sliderOutputsilo">
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td id="name0"></td>

                    <td id="amount0">Content Goes Here</td>
                    <td>
                        <div class="grid-x grid-margin-x">
                            <div class="cell small-8">
                                <div class="slider" data-slider data-initial-start="0" data-end="10">
                                        <span class="slider-handle" data-slider-handle role="slidergit" tabindex="1"
                                              aria-controls="sliderOutput0" aria-valuenow="5"></span>
                                    <span class="slider-fill" data-slider-fill></span>
                                </div>
                            </div>
                            <div class="cell small-4">
                                <input type="number" id="sliderOutput0">
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td id="name1"></td>

                    <td id="amount1">Content Goes Here</td>
                    <td>
                        <div class="grid-x grid-margin-x">
                            <div class="cell small-8">
                                <div class="slider" data-slider data-initial-start="0" data-end="10">
                                        <span class="slider-handle" data-slider-handle role="slidergit" tabindex="1"
                                              aria-controls="sliderOutput1" aria-valuenow="5"></span>
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
                    <td id="name2"></td>

                    <td id="amount2">Content Goes Here</td>
                    <td>
                        <div class="grid-x grid-margin-x">
                            <div class="cell small-8">
                                <div class="slider" data-slider data-initial-start="0" data-end="10">
                                        <span class="slider-handle" data-slider-handle role="slidergit" tabindex="1"
                                              aria-controls="sliderOutput2" aria-valuenow="5"></span>
                                    <span class="slider-fill" data-slider-fill></span>
                                </div>
                            </div>
                            <div class="cell small-4">
                                <input type="number" id="sliderOutput2">
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td id="name3"></td>

                    <td id="amount3">Content Goes Here</td>
                    <td>
                        <div class="grid-x grid-margin-x">
                            <div class="cell small-8">
                                <div class="slider" data-slider data-initial-start="0" data-end="10">
                                        <span class="slider-handle" data-slider-handle role="slidergit" tabindex="1"
                                              aria-controls="sliderOutput3" aria-valuenow="5"></span>
                                    <span class="slider-fill" data-slider-fill></span>
                                </div>
                            </div>
                            <div class="cell small-4">
                                <input type="number" id="sliderOutput3">
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td id="name4"></td>

                    <td id="amount4">Content Goes Here</td>
                    <td>
                        <div class="grid-x grid-margin-x">
                            <div class="cell small-8">
                                <div class="slider" data-slider data-initial-start="0" data-end="10">
                                        <span class="slider-handle" data-slider-handle role="slidergit" tabindex="1"
                                              aria-controls="sliderOutput4" aria-valuenow="5"></span>
                                    <span class="slider-fill" data-slider-fill></span>
                                </div>
                            </div>
                            <div class="cell small-4">
                                <input type="number" id="sliderOutput4">
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td id="name5"></td>

                    <td id="amount5">Content Goes Here</td>
                    <td>
                        <div class="grid-x grid-margin-x">
                            <div class="cell small-8">
                                <div class="slider" data-slider data-initial-start="0" data-end="10">
                                        <span class="slider-handle" data-slider-handle role="slidergit" tabindex="1"
                                              aria-controls="sliderOutput5" aria-valuenow="5"></span>
                                    <span class="slider-fill" data-slider-fill></span>
                                </div>
                            </div>
                            <div class="cell small-4">
                                <input type="number" id="sliderOutput5">
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td id="name6"></td>

                    <td id="amount6">Content Goes Here</td>
                    <td>
                        <div class="grid-x grid-margin-x">
                            <div class="cell small-8">
                                <div class="slider" data-slider data-initial-start="0" data-end="10">
                                        <span class="slider-handle" data-slider-handle role="slidergit" tabindex="1"
                                              aria-controls="sliderOutput6" aria-valuenow="5"></span>
                                    <span class="slider-fill" data-slider-fill></span>
                                </div>
                            </div>
                            <div class="cell small-4">
                                <input type="number" id="sliderOutput6">
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td id="name7"></td>

                    <td id="amount7">Content Goes Here</td>
                    <td>
                        <div class="grid-x grid-margin-x">
                            <div class="cell small-8">
                                <div class="slider" data-slider data-initial-start="0" data-end="10">
                                        <span class="slider-handle" data-slider-handle role="slidergit" tabindex="1"
                                              aria-controls="sliderOutput7" aria-valuenow="5"></span>
                                    <span class="slider-fill" data-slider-fill></span>
                                </div>
                            </div>
                            <div class="cell small-4">
                                <input type="number" id="sliderOutput7">
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td id="name8"></td>

                    <td id="amount8">Content Goes Here</td>
                    <td>
                        <div class="grid-x grid-margin-x">
                            <div class="cell small-8">
                                <div class="slider" data-slider data-initial-start="0" data-end="10">
                                        <span class="slider-handle" data-slider-handle role="slidergit" tabindex="1"
                                              aria-controls="sliderOutput8" aria-valuenow="5"></span>
                                    <span class="slider-fill" data-slider-fill></span>
                                </div>
                            </div>
                            <div class="cell small-4">
                                <input type="number" id="sliderOutput8">
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td id="name9"></td>

                    <td id="amount9">Content Goes Here</td>
                    <td>
                        <div class="grid-x grid-margin-x">
                            <div class="cell small-8">
                                <div class="slider" data-slider data-initial-start="0" data-end="10">
                                        <span class="slider-handle" data-slider-handle role="slidergit" tabindex="1"
                                              aria-controls="sliderOutput9" aria-valuenow="5"></span>
                                    <span class="slider-fill" data-slider-fill></span>
                                </div>
                            </div>
                            <div class="cell small-4">
                                <input type="number" id="sliderOutput9">
                            </div>
                        </div>
                    </td>
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
<script>

  //  $(document).ready(function () {
        $("#name").html('TEST');
        $.ajax({
            dataType: 'json',
            url: "response.php",
            success: function (result) {
                console.log(result[0]['name']);
                var i;
                for (i = 0; i < result.length; i++){
                    $("#name"+i).html(result[i]['name']);
                    $("#amount"+i).html(result[i]['usage']);
                   // $("#sliderOutput"+i).val(result[i]['usage']);
                    $("#test").attr("data-end", 20);

                }
             /*   $("#name").html(result[0]['name']);
                $("#amount").html(result[0]['amount']);
                $("#sliderOutput1").val(result[0]['amount']);
                $("#div3").html(result[1]['name']);
                $("#div4").html(result[1]['amount']);
                $("#sliderOutput1").val(result[1]['amount']);
                $("#test").attr("aria-valuenow", 9);*/
            }
        });
        $('[data-slider]').on('change.zf.slider', function () {
            console.log('Those tabs sure did change!');
        });
   // });
</script>

</body>
</html>

