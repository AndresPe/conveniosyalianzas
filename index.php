<head>
    <style>
        * {
            box-sizing: border-box;
            font-family: -apple-system, BlinkMacSystemFont, "segoe ui", roboto, oxygen, ubuntu, cantarell, "fira sans", "droid sans", "helvetica neue", Arial, sans-serif;
            font-size: 16px;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        body {
            background-color: #FFFFFF;
            margin: 0;
        }

        .navtop {
            background-color: #3f69a8;
            height: 60px;
            width: 100%;
            border: 0;
        }

        .navtop div {
            display: flex;
            margin: 0 auto;
            width: 1000px;
            height: 100%;
        }

        .navtop div h1,
        .navtop div a {
            display: inline-flex;
            align-items: center;
        }

        .navtop div h1 {
            flex: 1;
            font-size: 24px;
            padding: 0;
            margin: 0;
            color: #ecf0f6;
            font-weight: normal;
        }

        .navtop div a {
            padding: 0 20px;
            text-decoration: none;
            color: #c5d2e5;
            font-weight: bold;
        }

        .navtop div a i {
            padding: 2px 8px 0 0;
        }

        .navtop div a:hover {
            color: #ecf0f6;
        }

        .content {
            width: 1000px;
            margin: 0 auto;
        }

        .content h2 {
            margin: 0;
            padding: 25px 0;
            font-size: 22px;
            border-bottom: 1px solid #ebebeb;
            color: #666666;
        }

        .read .create-contact {
            display: inline-block;
            text-decoration: none;
            background-color: #38b673;
            font-weight: bold;
            font-size: 14px;
            color: #FFFFFF;
            padding: 10px 15px;
            margin: 15px 0;
        }

        .read .create-contact:hover {
            background-color: #32a367;
        }

        .read .pagination {
            display: flex;
            justify-content: flex-end;
        }

        .read .pagination a {
            display: inline-block;
            text-decoration: none;
            background-color: #a5a7a9;
            font-weight: bold;
            color: #FFFFFF;
            padding: 5px 10px;
            margin: 15px 0 15px 5px;
        }

        .read .pagination a:hover {
            background-color: #999b9d;
        }

        .read table {
            width: 100%;
            padding-top: 30px;
            border-collapse: collapse;
        }

        .read table thead {
            background-color: #ebeef1;
            border-bottom: 1px solid #d3dae0;
        }

        .read table thead td {
            padding: 10px;
            font-weight: bold;
            color: #767779;
            font-size: 14px;
        }

        .read table tbody tr {
            border-bottom: 1px solid #d3dae0;
        }

        .read table tbody tr:nth-child(even) {
            background-color: #fbfcfc;
        }

        .read table tbody tr:hover {
            background-color: #c40c1c;
        }

        .read table tbody tr:hover td {
            color: #FFFFFF;
        }

        .read table tbody tr:hover td:nth-child(1) {
            color: #FFFFFF;
        }

        .read table tbody tr td {
            padding: 10px;
        }

        .read table tbody tr td:nth-child(1) {
            color: #a5a7a9;
        }

        .read table tbody tr td.actions {
            padding: 8px;
            text-align: right;
        }

        .read table tbody tr td.actions .edit,
        .read table tbody tr td.actions .trash {
            display: inline-flex;
            text-align: right;
            text-decoration: none;
            color: #FFFFFF;
            padding: 10px 12px;
        }

        .read table tbody tr td.actions .trash {
            background-color: #b73737;
        }

        .read table tbody tr td.actions .trash:hover {
            background-color: #a33131;
        }

        .read table tbody tr td.actions .edit {
            background-color: #37afb7;
        }

        .read table tbody tr td.actions .edit:hover {
            background-color: #319ca3;
        }

        .update form {
            padding: 15px 0;
            display: flex;
            flex-flow: wrap;
        }

        .update form label {
            display: inline-flex;
            width: 400px;
            padding: 10px 0;
            margin-right: 25px;
        }

        .update form input {
            padding: 10px;
            width: 400px;
            margin-right: 25px;
            margin-bottom: 15px;
            border: 1px solid #cccccc;
        }

        .update form input[type="submit"] {
            display: block;
            background-color: #38b673;
            border: 0;
            font-weight: bold;
            font-size: 14px;
            color: #FFFFFF;
            cursor: pointer;
            width: 200px;
            margin-top: 15px;
        }

        .update form input[type="submit"]:hover {
            background-color: #32a367;
        }

        .delete .yesno {
            display: flex;
        }

        .delete .yesno a {
            display: inline-block;
            text-decoration: none;
            background-color: #38b673;
            font-weight: bold;
            color: #FFFFFF;
            padding: 10px 15px;
            margin: 15px 10px 15px 0;
        }

        .delete .yesno a:hover {
            background-color: #32a367;
        }
    </style>
</head>

<?php
include 'Conexion/conexion.php';
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title></title>
    <link href="style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
</head>

<body>
    <nav class="navtop">
        <div>
            <h1>C&A</h1>
            <a href="read.php"><i class="fas fa-address-book"></i>Convenios Nacionales</a>
            <a href="read.php"><i class="fas fa-address-book"></i>Convenios Internacionales</a>
            <a href="read.php"><i class="fas fa-address-book"></i>Intercambios Academicos</a>
            <li class="nav-item">
                <a class="nav-link" href="login.php"><i class="fa fa-envelope"></i> Contact <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="fa fa-user"></i> Login</a>
            </li>
        </div>
    </nav>
</body>