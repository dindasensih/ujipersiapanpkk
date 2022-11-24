@extends('template')

@section('content')

<div class="container">
@foreach ($data as $item)
     <div class="card" style="width: 200px;">
        <img src="{{ asset('storage/'.$item->foto) }}" class="card-img-top" alt="foto" width=50px>
        <div class="card-body">
            <h5 class="card-title">{{ $item['judul'] }}</h5>
        <p class="card-text">{{ $item['isi'] }}</p>
    </div>
</div>
   @endforeach
</div>

@endsection