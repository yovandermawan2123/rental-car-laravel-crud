<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
       .table-bordered th {
                        padding: .4rem;
                        font-weight : bold;
                        vertical-align: top;
                        border-top: 1px solid #0a0a0a;
                        border-bottom: 1px solid #0a0a0a;
                        border-left: 1px solid #0a0a0a;
                        border-right: 1px solid #0a0a0a;
                    }
                
                    .table-bordered td:first-child {
                        border-left: 1px solid #0a0a0a;
                    }
                
                    .table-bordered td:last-child {
                        border-right: 1px solid #0a0a0a;
                    }

                    .table-bordered tr:last-child {
                        border-bottom: 1px solid #0a0a0a;
                    }

                    .table-bordered td {
                        border: 1px solid #0a0a0a;
                    }
                
                    .table-bordered { padding: .4rem; border-collapse: collapse }
                    .table-bordered td { padding: .4rem }

    </style>
    <title>Document</title>
</head>
<body>
    <div class="form-group">

        <table width="100%">
            <tr>
                <td style="text-align: center; font-size: 20px; font-weight: bold;" colspan="7">Laporan </td>
          
            </tr>
            <tr>
                <td style="text-align: center; font-size: 20px; font-weight: bold;" colspan="7">Penyewaan Mobil</td>
            </tr>
         
    
        </table>


            <table class="table table-bordered" align="center" cellspacing="0" width="100%" style="margin-top: 30px;">
                <thead>
                    <tr>
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
                            </tr>
                    @endforeach
                </tbody>

             
            </table>
            <div style="float: right">
                <h5>Tanda Tangan</h5>
                <h5>&nbsp</h5>
                <h5>--------------------</h5>
            </div>
      
    </div>

   

    <script type="text/javascript">
        window.print();
    </script>
</body>
</html>