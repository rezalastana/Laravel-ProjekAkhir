@extends('layouts.master')

@section('content')
    <div class="card">
      <form action="{{ url('/pertanyaan') }}" method="POST" class="m-3">
        @csrf
        <label for="judulpertanyaan">Judul Pertanyaan</label>
        <input type="text" name="judul" class="form-control mb-3">
        <label for="isipertanyaan">Isi Pertanyaan</label>
        <textarea name="isi" id="" cols="30" rows="10" class="form-control mb-3"></textarea>
        <label for="tagpertanyaan">Tag</label>
        <input type="text" name="tag" class="form-control mb-3">
        <input hidden type="text" name="tanggal_dibuat" value="{{ \Carbon\Carbon::now() }}">
        <br>
        <button class="btn btn-dark" type="submit">Upload Pertanyaan</button>
      </form>
    </div>
@endsection