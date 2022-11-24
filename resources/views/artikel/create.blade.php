@extends('template')
@section('content')


<div class="container">
    <div class="forms">
        <div class="xs">
        <h3>Tambah Artikel</h3>
<div class="tab-content">
    <form class="form-horizontal" action="{{url('artikel')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Judul</label>
            <input type="text" class="form-control" id="" name="judul" value="{{ old('judul')}}">
        </div>
     </div>

<div class="form-grup">
      <label for="exampleFormControlfile">Input Foto</label>
    <div class="col-sm-8">
    <input type="file" class="form-control" name="foto">
    </div>   

<div class="form-group">
        <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Isi</label>
            <input type="text" class="form-control" id="" name="isi" value="{{ old('isi')}}">
        </div>
</div>

<div class="form-group">
        <label for="exampleInputEmail1" class="form-label">Kategori</label>
         <select class="form-select @error('kategori_id') is-invalid @enderror" aria-label="Default select example" name="kategori_id">
        @foreach($kategori as $item)
            <option value="{{ $item->id }}" @selected(old('kategori_id')==$item->id)>{{ $item->nama }}</option>
        @endforeach
        </select>
	</div>
</div>

<div class="form-group">
        <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Tanggal</label>
            <input type="date" class="form-control" id="" name="tanggal" value="{{ old('tanggal')}}">
        </div>
</div>

  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
 </div>
</div>
@endsection