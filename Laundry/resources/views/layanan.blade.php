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
       <title>Layanan</title>
    <style>
        body {
            background-color: #dff4fd;
            font-family: 'Ubuntu', sans-serif !important;
        }

        a:hover {
          color: #008bc6 !important;
          font-size: 18px !important;
        }

        .card {
            transition: transform 0.3s;
        }

        .card.popup {
            transform: scale(1.06);
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
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const cards = document.querySelectorAll('.card');

            cards.forEach((card) => {
                card.addEventListener('mouseover', function() {
                    this.classList.add('popup');
                });

                card.addEventListener('mouseout', function() {
                    this.classList.remove('popup');
                });
            });
        });
    </script>
</head>
@section('main')
<body>
    
    <div class="card-group">
        <div class="card shadow border-0 m-3 pt-3 rounded">
            <img src="{{ asset('/img/cuci.jpg') }}" class="card-img-top" style="object-fit: contain; width:100%; height:500px">
            <div class="card-body">
                <h4 class="card-title" style="text-align: center; color: #267496;"><b>Cuci Kering</b></h4>
                <p class="card-text" style="text-align: Center;">
                    Tingkatkan kesegaran pakaian Anda dengan layanan cuci kami. Kami menyediakan 
                    perawatan maksimal untuk memastikan pakaian Anda bersih dan segar setiap saat.
                </p>
            </div>
        </div>
        <div class="card shadow border-0 m-3 pt-3 rounded">
            <img src="{{ asset('/img/setrika.jpg') }}" class="card-img-top" style="object-fit: contain; width:100%; height:500px">
            <div class="card-body">
                <h4 class="card-title" style="text-align: center; color: #267496;"><b>Setrika</b></h4>
                <p class="card-text" style="text-align: Center;">
                    Biarkan pakaian Anda bersinar dengan layanan setrika kami. Kelembutan dan ketelitian kami membuat 
                    setiap lipatan sempurna dan memberikan sentuhan profesional pada setiap pakaian.
                </p>
            </div>
        </div>
        <div class="card shadow border-0 m-3 pt-3 rounded">
            <img src="{{ asset('/img/CuciSetrika.jpg') }}" class="card-img-top" style="object-fit: contain; width:100%; height:500px">
            <div class="card-body">
                <h4 class="card-title" style="text-align: center; color: #267496;"><b>Cuci Setrika</b></h4>
                <p class="card-text" style="text-align: Center;">
                    Nikmati kenyamanan lengkap dengan layanan cuci dan setrika kami. Dengan satu layanan, 
                    pakaian Anda akan bersih, harum, dan siap dikenakan dengan tampilan rapi yang sempurna.
                </p>
            </div>
        </div>
        <div class="card shadow border-0 m-3 pt-3 rounded">
            <img src="{{ asset('/img/DO.PNG') }}" class="card-img-top" style="object-fit: contain; width:100%; height:500px">
            <div class="card-body">
                <h4 class="card-title" style="text-align: center; color: #267496;"><b>Drop Order</b></h4>
                <p class="card-text" style="text-align: Center;">
                    Tidak punya waktu untuk mengantar pakaian Anda? Gunakan layanan DO kami dan 
                    biarkan kami mengantar kebersihan langsung ke pintu Anda. Pakaian bersih tanpa repot!
                </p>
            </div>
        </div>
    </div>
    <footer>
        <p>&copy; 2024 Diva Laundry. All Rights Reserved.</p>
    </footer>
</body>
@endsection
</html>