@extends('template')

@section('content')

{{-- membuat tabel view kategori --}}

<div class="container-fluid">
<div class="card shadow mb-3">
    <div class="card header py-3">
        <h5 class="m-0 text-primary text-center">Artikel</h5>
        <a href="{{ url('artikel/create')}}" class="btn btn-primay">Tambah Artikel</a>
</div>
    <div class="card-body">
<table class="table-responsive">
<table class="table table-bordered" cellspacing="0">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Judul</th>
      <th scope="col">Foto</th>
      <th scope="col">Isi</th>
      <th scope="col">Kategori</th>
      <th scope="col">Tanggal</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
  @foreach($data as $item)
    <tr>
      <th>{{$loop->iteration}}</th>
      <td>{{ $item['judul'] }}</td>
      <td><img src="{{ asset('storage/' . $item->foto)}}" width="100px"></td>
      <td>{{ $item['isi'] }}</td>
      <td>{{ $item->kategori->nama }}</td>
      <td>{{ $item['tanggal'] }}</td>
      <td> <a href="{{ url('artikel/' . $item->id . '/edit')}}"class= "btn btn-primary">Edit</button>
      <a href="{{ url('artikel/' . $item->id . '/delete')}}"class= "btn btn-secondary">Delete</button></a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>

@endsection