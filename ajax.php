<?php

require 'classroom-data.php';

$ClassData = DATA;

$action = $_GET['action'] ?? '';

header('Content-Type: application/json');

switch ($action) {

    case 'makes':

        $country =
            $_GET['country'] ?? '';

        echo json_encode(
            array_keys(
                $cars[$country] ?? []
            )
        );

        break;

    case 'models':

        $country =
            $_GET['country'] ?? '';

        $make =
            $_GET['make'] ?? '';

        echo json_encode(
            $cars[$country][$make] ?? []
        );

        break;

    default:

        echo json_encode([]);
}