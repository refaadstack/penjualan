<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function index()
    {
        $obj = \App\Buku::all();
        $data['obj'] = $obj;
        return view('buku_index',$data);
    }
    public function tambah()
    {
        $data['obj']            =  new \App\Buku();
        $data['action']         = 'BukuController@simpan';
        $data['btn_submit']     = 'SIMPAN';
        $data['method']         = "POST";
        return view('buku_form',$data);
    }
    public function simpan(Request $request)
    {
        $validasi = $this->validate($request,
            [
                'judul' => 'required|unique:bukus',
                'tahun_terbit' => 'required|unique:bukus',
                'pengarang' => 'required|unique:bukus',
            ]);

        \App\Buku::create($request->all());
        return redirect('admin/buku/index')->with('pesan', 'Data sudah disimpan!');
    }
    public function hapus($id)
    {
        $obj = \App\Buku::findOrFail($id);
        $obj->delete();
        return back()->with('pesan','Data sudah dihapus!');
    }
    public function edit($id)
    {
        $data['obj']     = \App\Buku::findOrFail($id);        
        $data['method']     = "PUT";
        $data['btn_submit'] = "UPDATE";
        $data['action']     = array('BukuController@update', $id);
        return view('buku_form',$data);        
    }
    public function update(Request $request, $id)
    {
        $obj = \App\Buku::findOrFail($id);
        $validasi = $this->validate($request,[
            'judul' => 'required|unique:bukus,judul,'.$id,
            'tahun_terbit' => 'required|unique:bukus,tahun_terbit,'.$id,
            'pengarang' => 'required|unique:bukus,pengarang,'.$id,            
        ]); 
        $obj->update($request->all());        
        return redirect('admin/buku/index')->with('pesan', 'Data sudah diubah!');
    }
}
