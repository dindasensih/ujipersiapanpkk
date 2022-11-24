@extends('template')
@section('content')


<div class="container">
    <div class="forms">
        <div class="xs">
        <h3>Tambah User</h3>
<div class="tab-content">
    <form class="form-horizontal" action="{{url('users')}}" method="POST">
    @csrf
    <div class="form-group">
        <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Nama</label>
            <input type="text" class="form-control" id="" name="name" value="{{ old('name')}}">
        </div>
     </div>
     <div class="form-group">
        <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email</label>
            <input type="text" class="form-control" id="" name="email" value="{{ old('email')}}">
        </div>
     </div>
     <div class="form-group">
        <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Role</label>
            <div class="col-sm-8">
				<select class="form-control" name="role">
                    <option selected value="" disabled>Pilih Role</option>
                    <option value="admin">Admin</option>
                    <option value="editor">Editor</option>
                </select>
        </div>
        <div class="form-group">
        <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Password</label>
            <input type="password" class="form-control" id="" name="password" value="{{ old('password]')}}">
        </div>
     </div>
     </div>
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
 </div>
</div>
@endsection