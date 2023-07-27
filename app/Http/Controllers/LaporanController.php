<?php

namespace App\Http\Controllers;

use App\Models\Penyewaan;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function index(){
        $penyewaans = Penyewaan::select('penyewaans.*', 'customers.name as customer_name')
        ->leftJoin('customers', 'penyewaans.customer_id', '=', 'customers.id')
        ->get();
        return view('laporan.index', [
            'penyewaans' => $penyewaans
        ]);
    }
    public function print(){
        $penyewaans = Penyewaan::select('penyewaans.*', 'customers.name as customer_name')
        ->leftJoin('customers', 'penyewaans.customer_id', '=', 'customers.id')
        ->get();
        return view('laporan.print', [
            'penyewaans' => $penyewaans
        ]);
    }
   
}
