<?php
	include $_SERVER['DOCUMENT_ROOT']."/project/dbcon.php";
	include $_SERVER['DOCUMENT_ROOT']."/project/login/adminvalidation.php";
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <!-- datatable -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap4.min.css">

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/responsive.bootstrap4.min.js"></script>
      
    <link rel="stylesheet" type="text/css" href="../../css/style.css">


    <title></title>
    <style>
       .d_btn{
            padding: 5px 15px;
            background: #EB8027;
            font-weight: bold;
            font-size: 15px;
            color: white!important;
            border-radius: 5px;
            border: 1px;
        }
        .page-item.active .page-link{
            background-color: #EB8027!important;
            border-color: #EB8027!important;
        }
        .d_h2{
            color: #EB8027;
            font-weight: 600;
        }
        a{
           color: #6c757d!important;
        }
        a:hover{
            color: #fff!important;
        }
        .page-item.active .page-link{
            color: #fff!important;
        }
    </style>
</head>
<body>
    <main> 
        <div class="bg-color pb-3 pt-3">
                <div class="d-flex justify-content-around text-center align-items-center boder-w p-3">
                    <div>
                        <img src="../../image/download.jpeg" class="w-75" alt="logo">
                    </div>
                    <div>
                        <h2 class="text-white"> Jubail University College <br> Booking</h2>
                    </div>
                    <div>
                        <img src="../../image/rightimg.png" class="w-75" alt="rightimg">
                    </div>
                </div>
            </div>
            <div>
                <div class="row m-0 pt-5 pb-5">
                    <div class="col-md-10 m-auto pt-5 pb-5 border-bg px-5">