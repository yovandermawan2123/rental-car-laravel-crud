@extends('layouts.main')
@section('container')
    

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center p2-3 pb-2 mb-3 border-bottom">
  <h2 class="h2">Merk</h1>

</div>

<div class="card shadow mb-4">
    <div class="card-body">
        <form class="form-inline">
            {{-- <div class="form-group mr-2 mb-2">
              <input type="text" class="form-control" id="" >
            </div> --}}
            {{-- <button type="submit" class="btn btn-warning mb-2 mr-2">Search</button> --}}
            <a href="/merk/create" class="btn btn-primary mb-2">Tambah</a>
          </form>
        
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th width="5%">No</th>
                        <th>Merk</th>
                        <th width="20%">Action</th>
                    </tr>
                </thead>
                
                <tbody>
                    @foreach ($merks as $merk)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $merk->name }}</td>
                        <td class="text-center">
                        <a href="/merk/edit/{{ $merk->id }}" class="btn btn-warning"><i class="fas fa-pencil-alt"></i></a>
                        <form action="/merk/delete/{{ $merk->id }}" method="POST" class="d-inline">
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