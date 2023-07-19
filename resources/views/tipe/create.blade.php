<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Data Tipe</title>
</head>

<body
    style="background-image: url({{ url('../resources/img/4.jpg') }});
background-repeat: no-repeat;
background-size: cover;">
    @extends('layouts.app')

    @section('content')
        <h2>Input Data Tipe Baju</h2>

        <form action="{{ url('/tipe') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="">Tipe Baju</label>
                <input type="text" name="tipe_baju" class="form-control">
            </div>
            <div class="mb-3">
                <label for="">Unisex Baju</label>
                <input type="text" name="tipe_unisex_baju" class="form-control">
            </div>
            <div class="mb-3">
                <input type="submit" value="SIMPAN" class="btn btn-primary">
            </div>
        </form>
    @endsection

</body>

</html>
