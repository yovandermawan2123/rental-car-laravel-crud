<?php

namespace App\Http\Controllers;

use App\Models\Merk;
use Illuminate\Http\Request;

class MerkController extends Controller
{
    public function index()
    {
        $merks = Merk::get();
        return view('merk.index', [
            'merks' => $merks,
        ]);
    }
    public function create()
    {
        return view('merk.create');
    }
    public function edit($id)
    {
        $merk = Merk::find($id);
        return view('merk.edit', ['merk' => $merk]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
        ]);

        Merk::create($validatedData);

        return redirect('/merk')->with('success', 'Tambah Customer Berhasil');
    }

    public function update(Request $request, $id)
    {
        $merk = Merk::find($id);
        $merk->name = $request->name;
        $merk->update();
        

        return redirect('/merk')->with('success', 'Edit User Berhasil');
    }


    public function destroy($id)
    {
        merk::destroy($id);
        return redirect('/merk')->with('success', 'User has been deleted!');
    }
  
}
