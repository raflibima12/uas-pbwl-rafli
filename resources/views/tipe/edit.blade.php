<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Data Tipe</title>
</head>

<body
    style="background-image: url({{ url('../resources/img/4.jpg') }});
background-repeat: no-repeat;
background-size: cover;>
@extends('layouts.app')

@section('content')
<div class="container">

    <h3>Edit Data Tipe Baju</h3>
    <form action="{{ url('/tipe/' . $row->id_tipe) }}" method="POST">
        @method('PATCH')
        @csrf
        <div class="mb-3">
            <label>Tipe Baju</label>
            <input type="text" class="form-control" name="tipe_baju" value="{{ $row->tipe_baju }}"></>
        </div>
        <div class="mb-3">
            <label>Unisex Baju</label>
            <input type="text" class="form-control" name="tipe_unisex_baju" value="{{ $row->tipe_unisex_baju }}"></>
        </div>
        <div class="mb-3">
            <input class="btn btn-primary btn-sm float-none" type="submit" value="UPDATE">
        </div>
    </form>
    </div>
@endsection

</body>

</html>
