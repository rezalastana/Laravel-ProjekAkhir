@extends('layouts.master')

@section('content')
<h1>DETAIL ARTIKEL</h1>
<div class="card mb-2">
  <div class="card-body">
    <h5 class="card-title"> {{ $output->judul }} </h5>
    <h6 class="card-subtitle mb-2 text-muted">slug: {{ str_replace(" ", "-", strtolower($output->judul)) }}</h6>
    <p class="card-text text-justify">{{ $output->isi }}</p>
    <p class="card-text text-justify">created at: {{ $output->tanggal_dibuat }}</p>
    <p class="card-text text-justify">updated at: {{ $output->tanggal_diperbarui }}</p>
    <p class="btn btn-primary active">{{ $output->tag }}</p>
    <p class="btn btn-primary active">{{ $output->tag }}</p>

    <hr>
    <a href="{{ url('/pertanyaan') }}"class="btn btn-primary">Kembali</a>
  </div>
</div>
@endsection