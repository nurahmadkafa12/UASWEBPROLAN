<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Order Masuk</title>
    <style>
         body {
            background-color: #dff4fd;
            font-family: 'Ubuntu', sans-serif !important;
        }
        
        a:hover {
          color: #008bc6 !important;
          font-size: 18px !important;
        }
    </style>
</head>
@extends('template')
@section('main')
    

<body>
    <div class="card shadow w-50 mt-5 mx-auto pb-3">
        <div class="card-body">
            <form action="{{ url('/store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" name="nama">
                </div>
                <div class="mb-3">
                    <label for="nomor" class="form-label">Nomor Hp / Whatsapp</label>
                    <input type="text" class="form-control" name="nomor">
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <input type="text"  class="form-control" name="alamat">
                </div>
                <div class="mb-3">
                    <label for="berat" class="form-label">Berat 'kg'</label>
                    <input type="text"  class="form-control" name="berat">
                </div>
                <div class="mb-3">
                    <label for="layanan">Pilih Jenis Layanan</label>
                    <select name="layanan" class="form-select form-select-md">
                        <option value="Cuci">Cuci</option>
                        <option value="Setrika">Setrika</option>
                        <option value="Cuci Setrika">Cuci + Setrika</option>
                    </select>
                </div>
                
                <button type="submit" class="btn btn-info">Order</button>
            </form>
        </div>
    </div>
</body>
@endsection
</html>