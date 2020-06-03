<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PembelianController extends Controller
{
    public function index()
    {
        $obj         = \App\Pembelian::all();
        $data['obj'] = $obj;
        return view("pembelian_index",$data);
    }
    public function tambah()
    {
        $data['obj']  = new \App\Pembelian();
        $data['judul']      = "Tambah Transaksi Pembelian";
        $data['action']     = 'PembelianController@simpan';
        $data['barang']     = \App\Barang::pluck('nama','id');            
        $data['btn_submit'] = 'SIMPAN';
        $data['method']     = "POST";
        return view('pembelian_form',$data);
    }
     
    public function simpan(Request $request)
    {
        $validasi = $this->validate($request,[  
            'nama_pemasok' => 'required',          
           'jumlah' => 'required|integer',        
         ]);
     
        $barang           = \App\Barang::findOrFail($request->barang_id);
        $stok_awal        = $barang->stok;
        $stok_total       = $stok_awal+$request->jumlah;
        $barang->stok     = $stok_total;
        \App\Pembelian::create($request->all());
        $barang->save();
        return back()->with('pesan', 'Transaksi Pembelian Berhasil');
    }
    

    public function hapus($id)
    {
        $barang = \App\Pembelian::findOrFail($id);
        $barang->delete();
        return back()->with('pesan','Data sudah dihapus!');
    }

}
