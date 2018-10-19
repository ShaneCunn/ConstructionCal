<?php
/**
 * Created by PhpStorm.
 * User: shane
 * Date: 17/10/2018
 * Time: 17:56
 */
require 'dbConfig.php';

db();
global $conn;
$value = $name = $id = $maxamount = null;
$sql = "SELECT id, name, amountMax, value FROM valuesforobjects";
$data = $conn->query($sql);
/*while ($row = $data->fetch(PDO::FETCH_ASSOC)) {
    $id = $row['id'];
    $name = $row['name'];
    $value = $row['value'];
}*/


//echo 'you filled title ' . $name . '<br> and description ' . $value;
?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
  <!--  <link rel="stylesheet" href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css">-->
    <link rel="stylesheet" href="assests/css/boostrap.min.css">
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
            <?php foreach ($data as $row) : ?>
                <tr>
                    <td><?= $row['name'] ?></td>
                    <td class="valueAmount"><?= $row['value'] ?></td>
                    <td class="quantity">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputGroupSelect01">Amount</label>
                            </div>
                            <select class="custom-select" id="inputGroupSelect01">

                                <?php
                                $maxamount = $row['amountMax'];
                                for ($i = 0; $i <= $maxamount; $i++)
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
