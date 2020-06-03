<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index()
    {
        $obj = \App\Kategori::all();
        $data['obj'] = $obj;
        return view('kategori_index',$data);
    }
    public function tambah()
    {
        $data['obj']            =  new \App\Kategori();
        $data['action']         = 'KategoriController@simpan';
        $data['btn_submit']     = 'SIMPAN';
        $data['method']         = "POST";
        return view('kategori_form',$data);
    }
    public function simpan(Request $request)
    {
        $validasi = $this->validate($request,
            [
                'Nama' => 'required|unique:kategoris',
            ]);

        \App\Kategori::create($request->all());
        return redirect('admin/kategori/index')->with('pesan', 'Data sudah disimpan!');
    }
    public function hapus($id)
    {
        $obj = \App\Kategori::findOrFail($id);
        $obj->delete();
        return back()->with('pesan','Data sudah dihapus!');
    }
    public function edit($id)
    {
        $data['obj']     = \App\Kategori::findOrFail($id);        
        $data['method']     = "PUT";
        $data['btn_submit'] = "UPDATE";
        $data['action']     = array('KategoriController@update', $id);
        return view('kategori_form',$data);        
    }
    public function update(Request $request, $id)
    {
        $kategori = \App\Kategori::findOrFail($id);
        $validasi = $this->validate($request,[
            'Nama' => 'required|unique:kategoris,nama,'.$id,            
        ]); 
        $kategori->update($request->all());        
        return redirect('admin/kategori/index')->with('pesan', 'Data sudah diubah!');
    }  
}