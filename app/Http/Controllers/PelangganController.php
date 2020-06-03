<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PelangganController extends Controller
{
    public function index()
    {
        $obj = \App\Pelanggan::all();
        $data['obj'] = $obj;
        return view('pelanggan_index',$data);
    }
    public function tambah()
    {
        $data['obj']            =  new \App\Pelanggan();
        $data['action']         = 'PelangganController@simpan';
        $data['btn_submit']     = 'SIMPAN';
        $data['method']         = "POST";
        return view('pelanggan_form',$data);
    }
    public function simpan(Request $request)
    {
        $validasi = $this->validate($request,
            [
                'Nama' => 'required|unique:pelanggans',
            ]);

        \App\Pelanggan::create($request->all());
        return redirect('admin/pelanggan/index')->with('pesan', 'Data sudah disimpan!');
    }
    public function hapus($id)
    {
        $obj = \App\Pelanggan::findOrFail($id);
        $obj->delete();
        return back()->with('pesan','Data sudah dihapus!');
    }
    public function edit($id)
    {
        $data['obj']     = \App\Pelanggan::findOrFail($id);        
        $data['method']     = "PUT";
        $data['btn_submit'] = "UPDATE";
        $data['action']     = array('PelangganController@update', $id);
        return view('pelanggan_form',$data);        
    }
    public function update(Request $request, $id)
    {
        $pelanggan = \App\Pelanggan::findOrFail($id);
        $validasi = $this->validate($request,[
            'Nama' => 'required|unique:pelanggans,nama,'.$id,            
        ]); 
        $pelanggan->update($request->all());        
        return redirect('admin/pelanggan/index')->with('pesan', 'Data sudah diubah!');
    }

}
