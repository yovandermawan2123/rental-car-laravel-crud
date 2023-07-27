@extends('layouts.main')
@section('container')
    

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center p2-3 pb-2 mb-3 border-bottom">
  <h2 class="h2">Tambah Mobil</h1>

</div>

<div class="card shadow mb-4">
    <div class="card-body">
        <form action="/mobil/update/{{ $mobil->id }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-row">
             <div class="col-lg-6">
                <img src="/upload_files/{{ $mobil->image }}" class="img-fluid" width="500px" alt="">
             </div>
             <div class="col-lg-6">
              <div class="form-group col-md-6">
                <label >Merk</label>
                <select name="merk_id" class="form-control"  disabled>
                  <option selected>Choose...</option>
                    @foreach ($merks as $merk)
                      <option value="{{ $merk->id }}" {{ ($mobil->merk_id == $merk->id) ? 'selected' : '' }}>{{ $merk->name }}</option>
                    @endforeach
                </select>
              </div>
              <div class="form-group col-md-6">
                <label >Nama</label>
                <input type="text" class="form-control" name="name" value="{{ $mobil->name }}" required  disabled>
              </div>
              <div class="form-group col-md-6">
                <label >Warna</label>
                <select name="warna" class="form-control"  disabled>
                  <option selected>Choose...</option>
                      <option value="Merah" {{ ($mobil->warna == 'Merah') ? 'selected' : '' }}>Merah</option>
                      <option value="Kuning" {{ ($mobil->warna == 'Kuning') ? 'selected' : '' }}>Kuning</option>
                      <option value="Hitam" {{ ($mobil->warna == 'Hitam') ? 'selected' : '' }}>Hitam</option>
                      <option value="Putih" {{ ($mobil->warna == 'Putih') ? 'selected' : '' }}>Putih</option>
                      <option value="Grey" {{ ($mobil->warna == 'Grey') ? 'selected' : '' }}>Grey</option>
                </select>
              </div>
              <div class="form-group col-md-6">
                <label >Plat Nomor</label>
                <input type="text" class="form-control" value="{{ $mobil->plat_nomor }}" name="plat_nomor" required  disabled>
              </div>
              <div class="form-group col-lg-6">
                <label >Tahun Beli</label>
                <input type="number" class="form-control" name="tahun_beli" value="{{ $mobil->tahun_beli }}" min="2000" max="2022" required  disabled> 
              </div>
             
              {{-- <div class="form-group col-lg-7">
                <label>Gambar</label>
                <input type="hidden" value="{{ $mobil->image }}" name="old_image">
                <input type="file" class="form-control" name="image" >
              </div> --}}
           
             </div>
            </div>
          
          
            {{-- <button type="submit" class="btn btn-success mt-2">Tambah</button> --}}
            <a href="/mobil" class="btn btn-warning mt-2">Kembali</a>
          </form>
        
      
    </div>
</div>
@endsection