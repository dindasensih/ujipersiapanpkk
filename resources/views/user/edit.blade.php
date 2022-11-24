@extends('template')
@section('content')


<div class="container">
    <div class="forms">
        <div class="xs">
        <h3>Edit User</h3>
<div class="tab-content">
    <form class="form-horizontal" action="{{route('users.update', $data->id)}}" method="POST">
    @method('put')
    @csrf
    <div class="form-group">
        <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Nama</label>
            <input type="text" class="form-control" id="" name="name" value="{{ $data->name }}">
        </div>
     </div>
  </div>
  <div class="form-group">
        <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email</label>
            <input type="text" class="form-control" id="" name="email" value="{{ $data->email}}">
        </div>
     </div>
     <div class="form-group">
        <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Role</label>
            <div class="col-sm-8">
				<select class="form-control" name="role">
                    <option selected value="" disabled>Pilih Role</option>
                        <option value="admin" @if('admin' == $data->role) @selected($data->role== 'admin') @endif>Admin</option>
                        <option value="editor" @if('editor' == $data->role) @selected($data->role== 'editor') @endif>Editor</option>
                </select>
        </div>
     </div>
       <div class="form-group">
        <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Password</label>
            <input type="text" class="form-control" id="" name="password" value="{{ $data->password}}">
        </div>
     </div>
  </div>


  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
 </div>
</div>
@endsection