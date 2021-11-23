@extends('layouts.main')
@section('container')
        <h1>DATA DIRI</h1>
        <b><h4>{{ $nama }}</h4></b>
        <h4>{{ $ttl }}</h4>
        <h4>{{ $jk }}</h4>
        <h4>{{ $alamat }}</h4>
        <h4>{{ $email }}</h4>

        
        <img src="img/{{ $img }}" alt="{{ $nama }}" width="500">

@endsection