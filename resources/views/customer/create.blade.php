@extends('layouts.main')
@section('container')
    

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center p2-3 pb-2 mb-3 border-bottom">
  <h2 class="h2">Tambah Customer</h1>

</div>

<div class="card shadow mb-4">
    <div class="card-body">
        <form action="/customers" method="POST">
            @csrf
            <div class="form-row">
              <div class="form-group col-md-6">
                <label >Nama</label>
                <input type="text" class="form-control" name="name"  required>
              </div>
              <div class="form-group col-md-6">
                <label >Email</label>
                <input type="email" class="form-control" name="email"  required>
              </div>
              <div class="form-group col-md-6">
                <label >Nomor Telephone</label>
                <input type="text" class="form-control" name="phone_number" required>
              </div>
              <div class="form-group col-lg-7">
                <label >Alamat</label>
                <textarea name="address" id="" class="form-control" cols="80" rows="5" ></textarea>
              </div>
           
            </div>
          
          
            <button type="submit" class="btn btn-success mt-2">Tambah</button>
          </form>
        
      
    </div>
</div>
@endsection