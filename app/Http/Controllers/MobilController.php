<?php

namespace App\Http\Controllers;

use App\Models\Merk;
use App\Models\Mobil;
use Illuminate\Http\Request;
use App\Services\Upload\UploadService;
use Illuminate\Support\Facades\File;

class MobilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mobils = Mobil::get();
        return view('mobil.index', [
            'mobils' => $mobils
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $merks = Merk::get();
        return view('mobil.create', [
            'merks' => $merks
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
            'merk_id' => 'required',
            'name' => 'required|max:255',
            'warna' => 'required',
            'plat_nomor' => 'required',
            'tahun_beli' => 'required'
        ]);

        if($request->file('image')){
            $validatedData['image'] = $request->file('image')->getClientOriginalName();
        }

        $file = (new UploadService())->saveFile($request->file('image'), 'upload_files', $request->file('image')->getClientOriginalName());

        Mobil::create($validatedData);

        return redirect('/mobil')->with('success', 'Tambah Mobil Berhasil');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mobil  $mobil
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mobil = Mobil::find($id);
        $merks = Merk::get();
        return view('mobil.show', [
            'mobil' => $mobil,
            'merks' => $merks
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mobil  $mobil
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mobil = Mobil::find($id);
        $merks = Merk::get();
        return view('mobil.edit', [
            'mobil' => $mobil,
            'merks' => $merks
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mobil  $mobil
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // dd($request->all());
        $mobil = Mobil::find($id);
        $mobil->merk_id     = $request->merk_id;
        $mobil->name        = $request->name;
        $mobil->warna       = $request->warna;
        $mobil->plat_nomor  = $request->plat_nomor;
        $mobil->tahun_beli  = $request->tahun_beli;
        $mobil->image       = isset($request->image) ? $request->image : $request->old_image;
        $mobil->update();

       

        if($request->file('image')){
            if(File::exists(public_path('upload_files/'. $request->old_image))){
                File::delete(public_path('upload_files/'. $request->old_image));
            }
            $file = (new UploadService())->saveFile($request->file('image'), 'upload_files', $request->file('image')->getClientOriginalName());

        }

        
        return redirect('/mobil')->with('success', 'Edit User Berhasil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mobil  $mobil
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    
            $filename = Mobil::select('image')->where('id', $id)->first();
            if(File::exists(public_path('upload_files/'. $filename->image))){
                File::delete(public_path('upload_files/'. $filename->image));
            }

            Mobil::destroy($id);
        
        
        
        return redirect('/mobil')->with('success', 'Product has been deleted!');
    }
}
