@extends('layouts.master')

@section('content')
{{-- body --}}
<h2>{{ $title }}</h2>
<form action="{{ route('inputan') }}" method="GET">
    <div class="form-group">
      <label for="exampleInputEmail1">produk address</label>
      <input type="text"name="produk" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>

    <div class="form-group">
      <label for="exampleInputPassword1">harga</label>
      <input type="number" name="harga" class="form-control" id="exampleInputPassword1">
    </div>

    <div class="form-group form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div>

    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
<hr>
@if (isset($_GET['submit']))
    <p>Nama= {{ $produk }}</p>
@endif
@endsection


