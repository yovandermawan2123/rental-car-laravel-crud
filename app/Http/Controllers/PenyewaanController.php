<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Mobil;
use App\Models\Penyewaan;
use Illuminate\Http\Request;

class PenyewaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $penyewaans = Penyewaan::select('penyewaans.*','mobils.name as mobil_name', 'customers.name as customer_name')
        ->leftJoin('mobils', 'penyewaans.mobil_id', '=', 'mobils.id')
        ->leftJoin('customers', 'penyewaans.customer_id', '=', 'customers.id')
        ->get();
        return view('penyewaan.index', [
            'penyewaans' => $penyewaans
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $customers = Customer::get();
        $mobils = Mobil::get();

        $AWAL = 'PNY';
        // karna array dimulai dari 0 maka kita tambah di awal data kosong
        // bisa juga mulai dari "1"=>"I"
        $bulanRomawi = array("", "I","II","III", "IV", "V","VI","VII","VIII","IX","X", "XI","XII");
        $noUrutAkhir = Penyewaan::max('id');
        $nomorawal=$noUrutAkhir+1;
        $no = 1;
        if($noUrutAkhir) {
        //echo "No urut surat di database : " . $noUrutAkhir;
        //echo "<br>";
        $nomor=sprintf($AWAL . '-' ."%05s", abs($noUrutAkhir + 1));
        }
        else
        {
        //echo "No urut surat di database : 0" ;
        //echo "<br>";
        $nomor=sprintf($AWAL . '-' ."%05s", $no);
        }

        return view('penyewaan.create', [
            'customers' => $customers,
            'mobils' => $mobils,
            'nomor_penyewaan' => $nomor
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nomor_penyewaan' => 'required',
            'customer_id' => 'required',
            'mobil_id' => 'required',
            'jenis_pembayaran' => 'required',
            'tanggal_pinjam' => 'required',
            'tanggal_kembali' => 'required',
            'harga' => 'required',
        ]);
   

        Penyewaan::create($validatedData);

        return redirect('/penyewaan')->with('success', 'Tambah Data Berhasil');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Penyewaan  $penyewaan
     * @return \Illuminate\Http\Response
     */
    public function show(Penyewaan $penyewaan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Penyewaan  $penyewaan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $penyewaan = Penyewaan::find($id);
        $customers = Customer::get();
        $mobils = Mobil::get();


        return view('penyewaan.edit', [
            'customers' => $customers,
            'mobils' => $mobils,
            'penyewaan' => $penyewaan
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Penyewaan  $penyewaan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $penyewaan = Penyewaan::find($id);
        $penyewaan->nomor_penyewaan = $request->nomor_penyewaan;
        $penyewaan->customer_id = $request->customer_id;
        $penyewaan->mobil_id = $request->mobil_id;
        $penyewaan->tanggal_pinjam = $request->tanggal_pinjam;
        $penyewaan->tanggal_kembali = $request->tanggal_kembali;
        $penyewaan->harga = $request->harga;
        $penyewaan->update();
        
        return redirect('/penyewaan')->with('success', 'Edit User Berhasil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Penyewaan  $penyewaan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Penyewaan::destroy($id);
        return redirect('/penyewaan')->with('success', 'User has been deleted!');
    }
}
