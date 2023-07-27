@extends('layouts.main')
@section('container')
    

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center p2-3 pb-2 mb-3 border-bottom">
  <h2 class="h2">Tambah Customer</h1>

</div>

<div class="card shadow mb-4">
    <div class="card-body">
        <form action="/merk/update/{{ $merk->id }}" method="POST">
            @csrf
            <div class="form-row">
              <div class="form-group col-md-6">
                <label >Merk</label>
                <input type="text" class="form-control" name="name" value="{{ $merk->name }}"  required>
              </div>
            </div>
          
          
            <button type="submit" class="btn btn-primary mt-2">Tambah</button>
          </form>
        
      
    </div>
</div>
@endsection