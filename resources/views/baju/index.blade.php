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
        <h2>Data Baju
            <a class="btn btn-info btn-sm float-end" href="{{ url('baju/create') }}">Tambah Baju</a>
        </h2>
        <table class="table table-striped table-hover shadow-lg">
            <tr>
                <th class="text-center">Id Baju</th>
                <th class="text-center">Nama Baju</th>
                <th class="text-center">Ukuran Baju</th>
                <th class="text-center">Harga Baju</th>
                <th class="text-center">Warna Baju</th>
                <th class="text-center">Deskripsi Baju</th>
                <th class="text-center">Tipe Baju</th>
                <th class="text-center">Khusus Baju</th>
                <th class="text-center">EDIT</th>
                <th class="text-center">DELETE</th>
            </tr>
            @foreach ($rows as $row)
                <tr>
                    <td class="text-center">{{ $row->id_baju }}</td>
                    <td class="text-center">{{ $row->nama_baju }}</td>
                    <td class="text-center ">{{ $row->ukuran_baju }}</td>
                    <td class="text-center text-warning">Rp.{{ $row->harga_baju }}</td>
                    <td class="text-center">{{ $row->warna_baju }}</td>
                    <td class="text-center">{{ $row->desc_baju }}</td>
                    <td class="text-center">{{ $row->r_tipe->tipe_baju }}</td>
                    <td class="text-center">{{ $row->r_tipe->tipe_unisex_baju }}</td>
                    <td><a class="btn btn-info btn-sm float-none"
                            href="{{ url('baju/' . $row->id_baju . '/edit') }}">Edit</a>
                    </td>
                    <td>
                        <form class="   " action="{{ url('baju/' . $row->id_baju) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-danger btn-sm float-none">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    @endsection

</body>

</html>
