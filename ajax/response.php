<?php
/**
 * Created by PhpStorm.
 * User: shane
 * Date: 19/10/2018
 * Time: 11:47
 */


$choose1 = null;

if (isset($_POST['action']) && !empty($_POST['action'])) {
    $action = $_POST['action'];
    $choose = $_POST['choose1'];
    switch ($action) {
        case 'getData' :
            getData($choose);
            break;
        case 'getProd' :
            getProducts($DBconnect);
            break;
        // ...etc...
    }
}

function getData($choose)
{

    echo $choose . '  ajax test';
}
