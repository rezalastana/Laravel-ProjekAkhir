@extends('layouts.master')

@section('content')
    <h1>EDIT PERTANYAAN</h1>
    <div class="card">
      <form action="{{ url('/pertanyaan/'.$id) }}" method="POST" class="m-3">
        {{ method_field('put') }}
        @csrf
        <input hidden name="id" value={{ $id }}>
        <label for="judulpertanyaan">Judul Pertanyaan</label>
        <input type="text" name="judul" class="form-control mb-3" value="{{ $output->judul }}">
        <label for="isipertanyaan">Isi Pertanyaan</label>
        <input name="isi" id="" cols="30" rows="10" class="form-control mb-3" value="{{ $output->isi }}" type="text">
        <label for="tagpertanyaan">Tag</label>
        <input type="text" name="tag" class="form-control mb-3" value="{{ $output->tag }}">
        <input hidden type="text" class="form-control" name="tanggal_dibuat" value="{{ $output->tanggal_dibuat }}"></input>
        <input hidden type="text" class="form-control" name="tanggal_diperbarui" value="{{ \Carbon\Carbon::now() }}">
        <br>
        <button class="btn btn-warning" type="submit">Submit</button>
      </form>
    </div>
@endsection