<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Baju</title>
</head>

<body
    style="background-image: url({{ url('../resources/img/4.jpg') }});
background-repeat: no-repeat;
background-size: cover;">
    @extends('layouts.app')

    @section('content')
        <h2>Input Data Baju</h2>

        <form action="{{ url('/baju') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="">Nama Baju</label>
                <input type="text" name="nama_baju" class="form-control">
            </div>
            <div class="mb-3">
                <label for="">Ukuran Baju</label>
                <input type="text" name="ukuran_baju" class="form-control">
            </div>
            <div class="mb-3">
                <label for="">Harga Baju</label>
                <input type="text" name="harga_baju" class="form-control">
            </div>
            <div class="mb-3">
                <label for="">Warna Baju</label>
                <input type="text" name="warna_baju" class="form-control">
            </div>
            <div class="mb-3">
                <label for="">Deskripsi Baju</label>
                <input type="text" name="desc_baju" class="form-control">
            </div>
            <div class="mb-3">
                <label class="input-group-text" for="inputGroupSelect01">ID Tipe Baju</label>
                <select class="form-select" id="inputGroupSelect01" name="id_type_baju" id="id_type_baju">
                    <option selected>Pilih Tipe Baju...</option>
                    @foreach ($rowsTipe as $Item)
                        <option value="{{ $Item->id_tipe }}">{{ $Item->tipe_baju }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <input type="submit" value="SIMPAN" class="btn btn-primary">
            </div>
        </form>
    @endsection

</body>

</html>
