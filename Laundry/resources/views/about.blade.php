@extends('template')
    

<html>
    <head>
        <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@500;700&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="/img/logo.png"/>
        <style>
                body {
            background-color: #dff4fd;
            font-family: 'Ubuntu', sans-serif !important;
        }

        .contact-container {
            max-width: 800px;
            margin: auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 50px;
        }

        .contact-box {
            margin-bottom: 20px;
            padding: 20px;
            background-color: #f8f9fa;
            border-radius: 8px;
        }
        </style>
    </head>
     @section('main')
<body>
   
    <div class="contact-container">
        <h2 class="text-center mb-4">Hubungi Kami</h2>

        <div class="contact-box">
            <h4>Kantor Pusat</h4>
            <p>Jalan Pintu Air No. 123</p>
            <p>Kademangan, Blitar</p>
            <p>Email: info@Divalaundry.com</p>
            <p>Telepon: +123 456 789</p>
        </div>

        <div class="contact-box">
            <h4>Cabang 1</h4>
            <p>Jalan Cabang No. 456</p>
            <p>Jl.Diponegoro 105, Dadapan Kedung bunder</p>
            <p>Email: branch1@Divalaundry.com</p>
            <p>Telepon: +987 654 321</p>
        </div>

        <div class="contact-box">
            <h4>Cabang 2</h4>
            <p>Jalan Cabang No. 789</p>
            <p>Sanan kulon, Blitar</p>
            <p>Email: branch2@Divalaundry.com</p>
            <p>Telepon: +555 123 456</p>
        </div>
    </div>

</body>
    @endsection