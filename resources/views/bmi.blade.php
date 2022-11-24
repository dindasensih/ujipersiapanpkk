@extends('template')

@section('content')

<div class="container">
  <div class="row align-items-start">
    <div class="col">
      <div class="forms">
	     <div class="xs">
  	       <h3>Biodata</h3>
            <form action="{{ route('bmi.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Nama</label>
                    <input type="text" class="form-control" name="nama">
                </div>
                <div class="mb-3">
                    <label class="form-label">Berat Badan</label>
                    <input type="number" class="form-control" name="berat">
                </div>
                <div class="mb-3">
                    <label class="form-label">Tinggi Badan</label>
                    <input type="number" class="form-control" name="tinggi">
                </div>
                <div class="mb-3">
                    <label class="form-label">Hobi</label>
                    <input type="text" class="form-control" name="hobi1">
                    <input type="text" class="form-control" name="hobi2">
                    <input type="text" class="form-control" name="hobi3">
                </div>                
                <div class="mb-3">
                    <label class="form-label">Tahun</label>
                    <input type="number" class="form-control" name="tahun">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

            <table class="table mt-3">
                <thead>
                    <tr>
                        <th scope="col">Nama</th>
                        <th scope="col">BMI</th>
                        <th scope="col">Status</th>
                        <th scope="col">Hobi</th>
                        <th scope="col">Umur</th>
                        <th scope="col">Konsultasi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        @isset($data)
                        <td>{{ $data['nama'] }}</td>
                        <td>{{ $data['bmi'] }}</td>
                        <td>{{ $data['status']}}</td>
                        <td>{{ $data['hobi']}}</td>
                        <td>{{ $data['umur']}}</td>
                        <td>{{ $data['konsul']}}</td>
                        @endisset
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    </div>
  </div>
@endsection