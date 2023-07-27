@extends('layouts.main')
@section('container')
    

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center p2-3 pb-2 mb-3 border-bottom">
  <h2 class="h2">Tambah Mobil</h1>

</div>

<div class="card shadow mb-4">
    <div class="card-body">
        <form action="/mobil" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-row">
              <div class="form-group col-md-6">
                <label >Merk</label>
                <select name="merk_id" class="form-control">
                  <option selected>Choose...</option>
                    @foreach ($merks as $merk)
                      <option value="{{ $merk->id }}">{{ $merk->name }}</option>
                    @endforeach
                </select>
              </div>
              <div class="form-group col-md-6">
                <label >Nama</label>
                <input type="text" class="form-control" name="name"  required>
              </div>
              <div class="form-group col-md-6">
                <label >Warna</label>
                <select name="warna" class="form-control">
                  <option selected>Choose...</option>
                      <option value="Merah">Merah</option>
                      <option value="Kuning">Kuning</option>
                      <option value="Hitam">Hitam</option>
                      <option value="Putih">Putih</option>
                      <option value="Grey">Grey</option>
                </select>
              </div>
              <div class="form-group col-md-6">
                <label >Plat Nomor</label>
                <input type="text" class="form-control" name="plat_nomor" required>
              </div>
              <div class="form-group col-lg-6">
                <label >Tahun Beli</label>
                <input type="number" class="form-control" name="tahun_beli" min="2000" max="2022" required>
              </div>
              <div class="form-group col-lg-7">
                <label>Gambar</label>
                <input type="file" class="form-control" name="image" required>
              </div>
           
            </div>
          
          
            <button type="submit" class="btn btn-primary mt-2">Tambah</button>
          </form>
        
      
    </div>
</div>
@endsection