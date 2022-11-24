@extends('template')

@section('content')

{{-- membuat tabel view user --}}

<div class="container-fluid">
<div class="card shadow mb-3">
    <div class="card header py-3">
        <h5 class="m-0 text-primary text-center">User</h5>
        <a href="{{ url('users/create')}}" class="btn btn-primay">Tambah User</a>
</div>
    <div class="card-body">
<table class="table-responsive">
<table class="table table-bordered" cellspacing="0">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Email</th>
      <th scope="col">Role</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
  @foreach($data as $item)
<tr>
    <th>{{ $loop->iteration }} </th>
    <td>{{ $item['name'] }}</td>
    <td>{{ $item['email'] }}</td>
    <td>{{ $item['role'] }}</td>
    <td> <a href="{{ url('users/' . $item->id . '/edit')}}" class="btn btn-primary">Edit</button>
    <a href="{{ url('users/' . $item->id . '/delete') }}" class="btn btn-secondary">Delete</button></a> <td>
</tr>
    @endforeach
  </tbody>
</table>
</div>

@endsection