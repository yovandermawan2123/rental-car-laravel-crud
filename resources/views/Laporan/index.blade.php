@extends('layouts.main')
@section('container')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
<h1 class="h3 mb-0 text-gray-800">Laporan Penyewaan Mobil</h1>
</div><hr>
<div class="card-header py-3" align="right">
<a href="/laporan/print" class="d-none d-sm-inline-block btn  btn-primary shadow-sm">
<i class="fa fa-print  text-white-50"></i> Print</a>
</div>
<div class="d-sm-flex align-items-center justify-content-between mb-4">
<div class="card-body">
<div class="table-responsive">
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
<thead>
<tr align="center">
                        <th>Nomor Penyewaan</th>
                        <th>Customer</th>
                        <th>Tanggal Pinjam</th>
                        <th>Tanggal Kembali</th>
                        <th>Harga</th>
                        <th>Jenis Pembayaran</th>
</tr>
</thead>
<tbody>
@foreach ($penyewaans as $pny)
<tr>
<td>{{$pny->nomor_penyewaan}}</td>
<td>{{$pny->customer_name}}</td>
<td>{{$pny->tanggal_pinjam}}</td>
<td>{{$pny->tanggal_kembali}}</td>
<td>{{$pny->harga}}</td>
<td>{{$pny->jenis_pembayaran}}</td>
{{-- <td align="center">
<a href="{{route( 'penjualan.show' ,[$pnj->id])}}" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm">
<i class="fas fa-edit fa-sm text-white-50"></i>Cetak
</a>

</td> --}}
</tr>
@endforeach
</tbody>
</table>
</div>
</div>
</div>
@endsection