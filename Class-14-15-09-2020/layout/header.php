<?php
include "dbConnect.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php crud</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">
    <style>
        .pagination {
            overflow: hidden;
            margin-bottom: 30px;
        }

        .pagination ul {
            margin: 0;
            padding: 0;
            list-style: none;
        }

        .pagination ul li {
            float: left;
            margin: 0 6px;
        }

        .pagination ul li a {
            display: inline-block;
            padding: 10px 12px;
            text-decoration: none;
            border: 1px solid #ddd;
        }

        .pagination ul li a:hover {}
    </style>
</head>

<body>