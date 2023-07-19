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
        <h2>Data Tipe Baju
            <a class="btn btn-info btn-sm float-end" href="{{ url('tipe/create') }}">Tambah Tipe Baju</a>
        </h2>
        <table class="table table-striped table-hover shadow-lg">
            <tr>
                <th>Id Tipe</th>
                <th>Tipe Baju</th>
                <th>Unisex Baju</th>
                <th>EDIT</th>
                <th>DELETE</th>
            </tr>
            @foreach ($rows as $row)
                <tr>
                    <td>{{ $row->id_tipe }}</td>
                    <td>{{ $row->tipe_baju }}</td>
                    <td>{{ $row->tipe_unisex_baju }}</td>
                    <td><a class="btn btn-info btn-sm float-none"
                            href="{{ url('tipe/' . $row->id_tipe . '/edit') }}">Edit</a>
                    </td>
                    <td>
                        <form class="" action="{{ url('tipe/' . $row->id_tipe) }}" method="POST">
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
