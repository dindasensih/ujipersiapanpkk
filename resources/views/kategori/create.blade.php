@extends('template')
@section('content')


<div class="container">
    <div class="forms">
        <div class="xs">
        <h3>Tambah Kategori</h3>
<div class="tab-content">
    <form class="form-horizontal" action="{{url('kategori')}}" method="POST">
    @csrf
    <div class="form-group">
        <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Nama</label>
            <input type="text" class="form-control" id="" name="nama" value="{{ old('nama')}}">
        </div>
     </div>
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
 </div>
</div>
@endsection