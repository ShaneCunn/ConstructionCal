<?php
/**
 * Created by PhpStorm.
 * User: shane
 * Date: 17/10/2018
 * Time: 17:56
 */





?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <!--  <link rel="stylesheet" href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css">-->
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

    <title>Hello, world!</title>
</head>
<body>

<main role="main" class="container">
    <div class="container">
        <h2>Object drain table</h2>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>Object name</th>
                <th>Drain rate</th>
                <th>amount</th>
                <th>Sub total:</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Cortium Cortium Silo</td>
                <td class="valueAmount">2</td>
                <td class="quantity">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputGroupSelect01">Amount</label>
                        </div>
                        <select class="custom-select" id="inputGroupSelect01">

                            <option value="0" class="qty">0</option>
                            <option value="1" class="qty">1</option></div>
                </td>
                <td class="subtotal">0</td>
            </tr>
            <tr>
                <td>Repair Module</td>
                <td class="valueAmount">0.5</td>
                <td class="quantity">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputGroupSelect01">Amount</label>
                        </div>
                        <select class="custom-select" id="inputGroupSelect01">

                            <option value="0" class="qty">0</option>
                            <option value="1" class="qty">1</option>
                            <option value="2" class="qty">2</option>
                            <option value="3" class="qty">3</option>
                            <option value="4" class="qty">4</option>
                            <option value="5" class="qty">5</option>
                            <option value="6" class="qty">6</option>
                            <option value="7" class="qty">7</option>
                            <option value="8" class="qty">8</option>
                            <option value="9" class="qty">9</option>
                            <option value="10" class="qty">10</option></div>
                </td>
                <td class="subtotal">0</td>
            </tr>
            <tr>
                <td>Turret AI Module</td>
                <td class="valueAmount">0.5</td>
                <td class="quantity">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputGroupSelect01">Amount</label>
                        </div>
                        <select class="custom-select" id="inputGroupSelect01">

                            <option value="0" class="qty">0</option>
                            <option value="1" class="qty">1</option>
                            <option value="2" class="qty">2</option>
                            <option value="3" class="qty">3</option>
                            <option value="4" class="qty">4</option>
                            <option value="5" class="qty">5</option>
                            <option value="6" class="qty">6</option>
                            <option value="7" class="qty">7</option>
                            <option value="8" class="qty">8</option>
                            <option value="9" class="qty">9</option>
                            <option value="10" class="qty">10</option></div>
                </td>
                <td class="subtotal">0</td>
            </tr>
            <tr>
                <td>Skywall Module</td>
                <td class="valueAmount">0.5</td>
                <td class="quantity">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputGroupSelect01">Amount</label>
                        </div>
                        <select class="custom-select" id="inputGroupSelect01">

                            <option value="0" class="qty">0</option>
                            <option value="1" class="qty">1</option>
                            <option value="2" class="qty">2</option>
                            <option value="3" class="qty">3</option>
                            <option value="4" class="qty">4</option>
                            <option value="5" class="qty">5</option>
                            <option value="6" class="qty">6</option>
                            <option value="7" class="qty">7</option>
                            <option value="8" class="qty">8</option>
                            <option value="9" class="qty">9</option>
                            <option value="10" class="qty">10</option></div>
                </td>
                <td class="subtotal">0</td>
            </tr>
            <tr>
                <td>Structure Shield Module</td>
                <td class="valueAmount">0.5</td>
                <td class="quantity">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputGroupSelect01">Amount</label>
                        </div>
                        <select class="custom-select" id="inputGroupSelect01">

                            <option value="0" class="qty">0</option>
                            <option value="1" class="qty">1</option>
                            <option value="2" class="qty">2</option>
                            <option value="3" class="qty">3</option>
                            <option value="4" class="qty">4</option>
                            <option value="5" class="qty">5</option>
                            <option value="6" class="qty">6</option>
                            <option value="7" class="qty">7</option>
                            <option value="8" class="qty">8</option>
                            <option value="9" class="qty">9</option>
                            <option value="10" class="qty">10</option></div>
                </td>
                <td class="subtotal">0</td>
            </tr>
            <tr>
                <td>Alarm Module</td>
                <td class="valueAmount">0.5</td>
                <td class="quantity">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputGroupSelect01">Amount</label>
                        </div>
                        <select class="custom-select" id="inputGroupSelect01">

                            <option value="0" class="qty">0</option>
                            <option value="1" class="qty">1</option>
                            <option value="2" class="qty">2</option>
                            <option value="3" class="qty">3</option>
                            <option value="4" class="qty">4</option>
                            <option value="5" class="qty">5</option>
                            <option value="6" class="qty">6</option>
                            <option value="7" class="qty">7</option>
                            <option value="8" class="qty">8</option>
                            <option value="9" class="qty">9</option>
                            <option value="10" class="qty">10</option></div>
                </td>
                <td class="subtotal">0</td>
            </tr>
            <tr>
                <td>Reinforcements Module</td>
                <td class="valueAmount">0.5</td>
                <td class="quantity">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputGroupSelect01">Amount</label>
                        </div>
                        <select class="custom-select" id="inputGroupSelect01">

                            <option value="0" class="qty">0</option>
                            <option value="1" class="qty">1</option>
                            <option value="2" class="qty">2</option>
                            <option value="3" class="qty">3</option>
                            <option value="4" class="qty">4</option>
                            <option value="5" class="qty">5</option>
                            <option value="6" class="qty">6</option>
                            <option value="7" class="qty">7</option>
                            <option value="8" class="qty">8</option>
                            <option value="9" class="qty">9</option>
                            <option value="10" class="qty">10</option></div>
                </td>
                <td class="subtotal">0</td>
            </tr>
            <tr>
                <td>Vehicle Gate</td>
                <td class="valueAmount">0.5</td>
                <td class="quantity">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputGroupSelect01">Amount</label>
                        </div>
                        <select class="custom-select" id="inputGroupSelect01">

                            <option value="0" class="qty">0</option>
                            <option value="1" class="qty">1</option>
                            <option value="2" class="qty">2</option>
                            <option value="3" class="qty">3</option>
                            <option value="4" class="qty">4</option>
                            <option value="5" class="qty">5</option>
                            <option value="6" class="qty">6</option>
                            <option value="7" class="qty">7</option>
                            <option value="8" class="qty">8</option>
                            <option value="9" class="qty">9</option>
                            <option value="10" class="qty">10</option></div>
                </td>
                <td class="subtotal">0</td>
            </tr>
            <tr>
                <td>Orbital Strike Uplink</td>
                <td class="valueAmount">4</td>
                <td class="quantity">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputGroupSelect01">Amount</label>
                        </div>
                        <select class="custom-select" id="inputGroupSelect01">

                            <option value="0" class="qty">0</option>
                            <option value="1" class="qty">1</option></div>
                </td>
                <td class="subtotal">0</td>
            </tr>
            <tr>
                <td>Routing Spire</td>
                <td class="valueAmount">1</td>
                <td class="quantity">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputGroupSelect01">Amount</label>
                        </div>
                        <select class="custom-select" id="inputGroupSelect01">

                            <option value="0" class="qty">0</option>
                            <option value="1" class="qty">1</option>
                            <option value="2" class="qty">2</option>
                            <option value="3" class="qty">3</option></div>
                </td>
                <td class="subtotal">0</td>
            </tr>
            <tr>
                <td>Pain Spire</td>
                <td class="valueAmount">1</td>
                <td class="quantity">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputGroupSelect01">Amount</label>
                        </div>
                        <select class="custom-select" id="inputGroupSelect01">

                            <option value="0" class="qty">0</option>
                            <option value="1" class="qty">1</option>
                            <option value="2" class="qty">2</option>
                            <option value="3" class="qty">3</option>
                            <option value="4" class="qty">4</option>
                            <option value="5" class="qty">5</option>
                            <option value="6" class="qty">6</option>
                            <option value="7" class="qty">7</option>
                            <option value="8" class="qty">8</option>
                            <option value="9" class="qty">9</option>
                            <option value="10" class="qty">10</option></div>
                </td>
                <td class="subtotal">0</td>
            </tr>
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
<script src="vendor/components/jquery/jquery.min.js"></script>
<script src="vendor/twbs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script>
    calc_total();

    $(".custom-select").on('change', function () {

        var parent = $(this).closest('tr');
        var price = parseFloat($('.valueAmount', parent).text());

        var choose = parseFloat($('.custom-select', parent).val());

        console.log(price);
        console.log(choose);
        $('.subtotal', parent).text(choose * price);
        calc_total();
    })

    function calc_total() {
        var sum = 0;
        console.log('subtotal is: ' + parseFloat($('#subtotal').text()))
        var parent = $(this).closest('tr');
        $('.subtotal').each(function () {

            sum += parseFloat($(this).text());
            console.log('total is: ' + sum);
            console.log('test is: ' + parseFloat($(this).text()));
        });
        $('.fulltotal').text('Per second: ' + sum);
        $('.perminute').text('Per minute: ' + sum * 60);
        $('.perhour').text('Per Hour: ' + sum * 60 * 60);
    }

</script>
</body>
</html>
