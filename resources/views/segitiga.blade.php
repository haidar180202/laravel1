@extends('layouts.master')

@section('content')
{{-- body --}}
<h2>{{ $titlebar }}</h2>
<form action="{{ route('rumussegitiga') }}" method="GET">
    <div class="form-group">
      <label for="exampleInputEmail1">alas</label>
      <input type="number"name="alas" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>

    <div class="form-group">
      <label for="exampleInputPassword1">tinggi</label>
      <input type="number" name="tinggi" class="form-control" id="exampleInputPassword1">
    </div>

    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
<hr>
@if (isset($_GET['submit']))
    <p>alas= {{ $alas }}</p>
    <p>tinggi= {{ $tinggi }}</p>
    <p>nilai= {{ $luas }}</p>
@endif
@endsection


