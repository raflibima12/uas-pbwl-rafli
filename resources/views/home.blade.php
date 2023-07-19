<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <script src="{{ asset('js/bootstrap.bundle.js') }}"></script>
</head>

<body
    style="background-image: url({{ url('../resources/img/4.jpg') }});
background-repeat: no-repeat;
background-size: cover;">
    @extends('layouts.app')

    @extends('layouts.nav')
    @section('content')
        <div class="container">
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <p>Anda Berhasil Login</p>
                <strong>Selamat Datang {{ Auth::user()->name }} ,</strong> Silahkan Lihat Produk Yang Tersedia di
                {{ config('app.name', 'Laravel') }}.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <div class="row justify-content-center mb-3">
                <div class="col-md-12">
                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{ url('../resources/img/1.jpg') }}" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ url('../resources/img/2.jpg') }}" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ url('../resources/img/3.jpg') }}" class="d-block w-100" alt="">
                            </div>
                        </div>
                    </div>

                </div>
                <h1 class=" text-center" style="font-size: 24px; margin: 34px 0;">NEW ARRIVAL</h1>
                <div class="col-md-6">
                    <img src="{{ url('../resources/img/produk1.png') }}" class="d-block w-100" alt="...">
                </div>
                <div class="col-md-6">
                    <img src="{{ url('../resources/img/produk2.png') }}" class="d-block w-100" alt="...">
                </div>
            </div>
            <div class="card bg-dark">
                <div class="card-header text-light">
                    Pesanan
                </div>
                <div class="card-body text-light">
                    <h5 class="card-title text-center">Info Lebih Lanjut</h5>

                    <a href="#" class="btn btn-secondary w-100 ">Hubungi Kami Melalui Telegram !!</a>
                </div>
            </div>
        </div>
    @endsection

</body>

</html>
