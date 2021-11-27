@extends('layouts.master')

@section('content')
{{-- body --}}

    {{-- Untuk menarik gambar di folder public/images/nama gambar --}}
    <img src="{{ URL::to('images/foto.jpg') }}" alt="" width="20%">


    {{-- Untuk menarik gambar di folder public nama gambar --}}
    <img src="{{ asset('foto.jpg') }}" alt="" width="20%">

    {{-- <a href="{{ Route('/latihan1') }}">Latihan1</a>
    <a href="{{ Route('/latihan2') }}">Latihan2</a> --}}
    <p>Halaman Lainnya</p>
    <a href="">Latihan1</a>
    <a href="">Latihan2</a>

@endsection


