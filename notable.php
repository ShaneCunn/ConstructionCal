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
<html lang="en">\
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

    <link href="http://cdn.rawgit.com/davidstutz/bootstrap-multiselect/master/dist/css/bootstrap-multiselect.css"
          rel="stylesheet" type="text/css"/>
    <script src="http://cdn.rawgit.com/davidstutz/bootstrap-multiselect/master/dist/js/bootstrap-multiselect.js"
            type="text/javascript"></script>
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
        <h4 class="card-title"><?= $title ?></h4>

        <p class="card-category">This is a very simple calculator for working out how much Cortium you are
            currently using</p>
        <div class="container">
            <div class="row text-center">


                <div class="col counter">
                    <h2 class="perhour timer count-title count-number">100</h2>
                    <p class="count-text">Per hour</p>
                </div>

                <div class="col counter">
                    <h2 class="perminute timer count-title count-number">200</h2>
                    <p class="count-text ">Per minute</p>
                </div>

                <div class="col counter">
                    <h2 class="persecond timer count-title count-number">300</h2>
                    <p class="count-text ">Per second</p>
                </div>

            </div>
        </div>
        <div class="col-sm-4">
            <div class="input-group">
                <span class="input-group-addon">Bathroom</span>
                <span class="input-group-btn">
        <button type="button" class="btn btn-default" data-value="-1" data-target="#spinner2" data-toggle="spinner">
            <span class="glyphicon glyphicon-minus"></span>
        </button>
    </span>
                <input type="text" data-ride="spinner" id="spinner2" class="form-control input-number" value="1"
                       data-min="1" data-max="10">
                <span class="input-group-btn">
        <button type="button" class="btn btn-default" data-value="2" data-target="#spinner2" data-toggle="spinner"
                data-on="mousehold">
            <span class="glyphicon glyphicon-plus"></span>
        </button>
    </span>
            </div>
        </div>
    </div>

</main><!-- /.container -->

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.bundle.js"></script>
<script src="assets/js/custom.js"></script>
<script>


    // alert('test');
    $(".custom-select").on('change', function () {
        // var test =
        var sum = 10;
        var parent = $(this).closest('tr');
        var choose1 = parseFloat($('.one', parent).val());

        console.log('test ' + choose1);


        $.ajax({
            url: "ajax/response.php", // json datasource
            data: {action: 'getData', choose1: choose1}, // Set the POST variable  array and adds action: getEMP
            type: 'post',  // method  , by default get
            success: function (data) {
                console.log(data);
                // $('.perhour').text('Per Hour: ' + sum * 60 * 60);

                $('.subtotal').each(function () {

                    sum += parseFloat($(this).text());
                    console.log('total is: ' + sum);
                    console.log('test is: ' + parseFloat($(this).text()));
                });
            }

        });
    })

</script>
</body>
</html>
