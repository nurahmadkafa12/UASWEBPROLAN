@extends('template')
<!DOCTYPE html>
<html lang="en">
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
    <title>Diva Laundry</title>
    <style>
              body {
            background-color: #dff4fd;
            font-family: 'Ubuntu', sans-serif !important;
        }
        
        a:hover {
          color: #008bc6 !important;
          font-size: 18px !important;
        }
        footer {
         background-color: #dff4fd;
         color: #267496;
         text-align: center;
         padding: 30px 0;
         position: relative;
         bottom: 0;
         width: 100%;
        }
    </style>
</head>
@section('main')
<body>
  
      <div class="container">

        <div style="display: flex; align-items: center; justify-content: space-between;">
          <div style="flex: 1;">
              <img src="{{ asset('/img/logo.png') }}" style="height: 500px;">
          </div>
          <div style="flex: 1; margin-left: 20px; display: flex; flex-direction: column; align-items: center;">
            <p style="font-size: 50px; text-align: center; font-weight: 300; color: #1a375f; margin-top: 100px;">"Kebersihan Tanpa Batas, Layanan Berkualitas!"</p>

        
            <div class="float-start">
                <a href="{{ url('/create') }}" class="btn btn-warning" style="color: #1a375f;">Pesan Sekarang</a>
            </div>
          </div>
          
        </div>
      </div>
      </div>
      <footer>
        
    </footer>
</body>
@endsection
</html>

