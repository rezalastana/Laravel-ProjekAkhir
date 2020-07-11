@extends('layouts.master')

@section('content')
<a href="{{ url('/pertanyaan/create') }}"class="btn btn-dark btn-lg mb-4">Buat Pertanyaan</a>
<div class="row">
  @foreach ($pertanyaan as $item)
  <div class="card mb-2 col-12">
    <div class="card-body">
      <h4 class="card-title"> {{ $item->judul }} </h5>
      <p class="card-text"> {{ $item->isi }} </p>
      <a href="{{ url('/pertanyaan/'.$item->id) }}"class="btn btn-success text-center">Detail Pertanyaan</a>
      <hr>
      <a href="{{ url('/pertanyaan/'.$item->id.'/edit') }}"class="btn btn-warning text-center">Edit Pertanyaan</a>
      <form action="{{ url('/pertanyaan/'.$item->id) }}" method="post" class="d-inline text-center">
        {{ method_field('delete') }}
        @csrf
        <button type="submit" class="btn btn-danger text-center">Delete Pertanyan</button>
      </form>
    </div>
  </div>
  @endforeach
</div>
@endsection


@push('scripts')
<script>
  Swal.fire({
      title: 'Berhasil!',
      text: 'Memasangkan script sweet alert',
      icon: 'success',
      confirmButtonText: 'Cool'
  })
</script>
@endpush