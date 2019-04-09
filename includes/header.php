<?php  include "includes/db.php"; ?>
<?php  include "includes/function.php"; ?>

<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=Sniglet" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Reem+Kufi" rel="stylesheet">

    <style>
        body{
            background-color: #f1f2f6;
        }

        #container{
            margin-top: 2%;
            margin-right: 5%;
            margin-left: 5%;
        }

        .boxview{
            background-color: #B9B2AB;
            position: fixed;
            top: 15%;
            left: 6%;
            /* width: auto; */
        }

        #login{
            background-image:url("images/loginbg.jpg");
            height:800px;
        }

        @media only screen and (max-width: 600px) {
            .webview{
                display:none;
            }
        }

        @media only screen and (min-width: 600px) {
            .mobileview{
                display:none;
            }
        }

        .addiscription{
            font-size:12px;
        }

        .ad:hover{
            width:44%;
        }

        .paidads:hover{
            border:2px solid blue;
        }
        
        #moredeal{
            width:550px;
            /* height:100px; */
            margin-top:1%;
            /* margin-bottom:5%; */
            border:1px solid #ccc;
            display:none;
        }
    </style>
</head>
<body>