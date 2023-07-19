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
        <div class="container">

            <h3>Edit Data Baju</h3>
            <form action="{{ url('/baju/' . $row->id_baju) }}" method="POST">
                @method('PATCH')
                @csrf
                <div class="mb-3">
                    <label>Nama Baju</label>
                    <input type="text" class="form-control" name="nama_baju" value="{{ $row->nama_baju }}"></>
                </div>
                <div class="mb-3">
                    <label>Ukuran Baju</label>
                    <input type="text" class="form-control" name="ukuran_baju" value="{{ $row->ukuran_baju }}"></>
                </div>
                <div class="mb-3">
                    <label>Harga Baju</label>
                    <input type="text" class="form-control" name="harga_baju" value="{{ $row->harga_baju }}"></>
                </div>
                <div class="mb-3">
                    <label>Warna Baju</label>
                    <input type="text" class="form-control" name="warna_baju" value="{{ $row->warna_baju }}"></>
                </div>
                <div class="mb-3">
                    <label>Deskripsi Baju</label>
                    <input type="text" class="form-control" name="desc_baju" value="{{ $row->desc_baju }}"></>
                </div>
                <div class="mb-3">
                    <label class="input-group-text" for="inputGroupSelect01">ID Tipe Baju</label>
                    <select class="form-select" id="inputGroupSelect01" name="id_type_baju" id="id_type_baju">
                        @foreach ($rowsTipe as $item)
                            <option value="{{ $item->id_tipe }}">{{ $item->tipe_baju }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <input class="btn btn-primary btn-sm float-none" type="submit" value="UPDATE">
                </div>
            </form>
        </div>
    @endsection

</body>

</html>
