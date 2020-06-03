<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Barang as Model;
class BarangController extends Controller
{
    public function index()
    {
        $obj         = \App\Barang::all();
        $data['obj'] = $obj;
        return view("barang_index",$data);
    }
    public function tambah()
    {
        $data['obj']            =  new \App\Barang();
        $data['action']         = 'BarangController@simpan';
        $data['btn_submit']     = 'SIMPAN';
        $data['method']         = "POST";
        return view('barang_form',$data);
    }
    public function simpan(Request $request)
    {
        $validasi = $this->validate($request,[
            'nama'          => 'required|unique:barangs',
            'kategori'      => 'required',
            'satuan'        => 'required',
            'harga_jual'    => 'required|integer',
            'stok'          => 'required|integer',
            'gambar'        => 'required|file|mimes:png,jpg,jpeg,gif',
            ]);
//logic here

        $file_nama             = $request->file('gambar')
                                         ->store('public/gambar');
        $requestData           = $request->all();
        $requestData['gambar'] = $file_nama;
        \App\Barang::create($requestData);
        return back()->with('pesan', 'Data sudah disimpan!');
    }
    public function edit($id)
    {
        $data['obj']     = \App\Barang::findOrFail($id);
        $data['method']     = "PUT";
        $data['btn_submit'] = "UPDATE";
        $data['action']     = array('BarangController@update', $id);
        return view('barang_form',$data);
    }
    public function update(Request $request, $id)
    {
        $barang   = \App\Barang::findOrFail($id);
        $validasi = $this->validate($request,[
                'nama' => 'required|unique:barangs,nama,'.$id,
                'kategori'        => 'required',
                'satuan'        => 'required',
                'harga_jual'       => 'required|integer',
                'stok'          => 'required|integer',
                'gambar'        => 'required|file|mimes:png,jpg,jpeg,gif',
        ]);
        $datagambar = $barang->gambar;
        @\Storage::delete($datagambar);

        $file_nama             = $request->file('gambar')->store('public/gambar');
        $requestData           = $request->all();
        $requestData['gambar'] = $file_nama;

        $barang->update($requestData);
        return back()->with('pesan', 'Data diubah!');

    }
    public function hapus($id)
    {
        $barang = \App\Barang::findOrFail($id);
        $barang->delete();
        return back()->with('pesan','Data sudah dihapus!');
    }
    public function detail($id)
    {
        $barang = \App\Barang::findOrFail($id);
        return response()->json($barang);
    }
}