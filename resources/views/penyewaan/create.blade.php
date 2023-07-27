@extends('layouts.main')
@section('container')
    

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center p2-3 pb-2 mb-3 border-bottom">
  <h2 class="h2">Tambah Data Penyewaan Mobil</h1>

</div>

<div class="card shadow mb-4">
    <div class="card-body">
        <form action="/penyewaan" method="POST" >
            @csrf
            <div class="form-row">
              <div class="form-group col-md-6">
                <label >Nomor Penyewaan</label>
                <input type="text" class="form-control" value="{{ $nomor_penyewaan }}" name="nomor_penyewaan" readonly required>
              </div>
              <div class="form-group col-md-6">
                <label >Customer</label>
                <select name="customer_id" class="form-control">
                  <option selected>Choose...</option>
                    @foreach ($customers as $customer)
                      <option value="{{ $customer->id }}">{{ $customer->name }}</option>
                    @endforeach
                </select>
              </div>
              <div class="form-group col-md-6">
                <label >Mobil</label>
                <select name="mobil_id" class="form-control">
                  <option selected>Choose...</option>
                    @foreach ($mobils as $mobil)
                      <option value="{{ $mobil->id }}">{{ $mobil->name }}</option>
                    @endforeach
                </select>
              </div>
             
              <div class="form-group col-md-6">
                <label >Jenis Pembayaran</label>
                <select name="jenis_pembayaran" class="form-control">
                  <option selected>Choose...</option>
                      <option value="Cash">Cash</option>
                      <option value="Transfer">Transfer</option>
                </select>
              </div>
              <div class="form-group col-md-6">
                <label >Harga</label>
                <input type="number" class="form-control" name="harga"  required>
              </div>
              <div class="form-group col-md-6">
                <label >Tanggal Pinjam</label>
                <input type="date" class="form-control" name="tanggal_pinjam" required>
              </div>
              <div class="form-group col-lg-6">
                <label >Tanggal Kembali</label>
                <input type="date" class="form-control" name="tanggal_kembali" required>
              </div>
          
           
            </div>
          
          
            <button type="submit" class="btn btn-primary mt-2">Tambah</button>
          </form>
        
      
    </div>
</div>
@endsection