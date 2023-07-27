@extends('layouts.main')
@section('container')
    

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center p2-3 pb-2 mb-3 border-bottom">
  <h2 class="h2">Data Penyewaan</h1>

</div>

<div class="card shadow mb-4">
    <div class="card-body">
        <form class="form-inline">
            {{-- <div class="form-group mr-2 mb-2">
              <input type="text" class="form-control" id="" >
            </div> --}}
            {{-- <button type="submit" class="btn btn-warning mb-2 mr-2">Search</button> --}}
            <a href="/penyewaan/create" class="btn btn-primary mb-2">Tambah</a>
          </form>
        
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th width="5%">No</th>
                        <th>Nomor</th>
                        <th>Customer</th>
                        <th>Mobil</th>
                        <th>Tanggal Pinjam</th>
                        <th>Tanggal Kembali</th>
                        <th>Harga</th>
                        <th width="20%">Action</th>
                    </tr>
                </thead>
                
                <tbody>
                    @foreach ($penyewaans as $penyewaan)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $penyewaan->nomor_penyewaan }}</td>
                        <td>{{ $penyewaan->customer_name }}</td>
                        <td>{{ $penyewaan->mobil_name }}</td>
                        <td>{{ $penyewaan->tanggal_pinjam }}</td>
                        <td>{{ $penyewaan->tanggal_kembali }}</td>
                        <td>{{ $penyewaan->harga }}</td>
                        <td class="text-center">
                        {{-- <a href="/penyewaan/show/{{ $penyewaan->id }}" class="btn btn-dark"><i class="fas fa-eye"></i></a> --}}
                        <a href="/penyewaan/edit/{{ $penyewaan->id }}" class="btn btn-warning"><i class="fas fa-pencil-alt"></i></a>
                        <form action="/penyewaan/delete/{{ $penyewaan->id }}" method="POST" class="d-inline">
                            @csrf    
                        <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button>   
                        </form> 
                        </td> 
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection