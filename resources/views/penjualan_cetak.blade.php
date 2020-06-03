<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<div class="container">
    <div class="row">
        <table width="100%">
            <thead>
                <tr>
                    <th width="27%">No Transaksi</th>
                    <td> : {{ $penjualan->id }}</td>
                </tr>
                <tr>
                    <th>Nama Pelanggan</th>
                    <td> : {{ $penjualan->pelanggan->nama }}</td>
                </tr>        
                <tr>
                    <th> Tgl Transaksi</th>
                    <td> : {{ $penjualan->created_at }}</td>
                </tr>
            </thead>
        </table>
        <table class="table table-bordered table-hover bg-white">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>NAMA BARANG</th>
                    <th>HARGA</th>
                    <th>JUMLAH</th>
                    <th>TOTAL</th>            
                </tr>
            </thead>
            <tbody>
                @foreach ($penjualan->details as $detail)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $detail->barang->nama }}</td>
                        <td>{{ $detail->harga }}</td>
                        <td>{{ $detail->jumlah }}</td>
                        <td>{{ $detail->harga*$detail->jumlah }}</td>        
                    </tr>
                    @php ($total[] = $detail->harga*$detail->jumlah)
                @endforeach                    
            </tbody>
            <tr>
                <td colspan="4">Total</td>
                <td colspan="2">{{ number_format(@array_sum($total),0,'.','.') }}</td>
            </tr>
        </table>        
    </div>
    <div class="row">
        Jambi, {{ $penjualan->created_at }} <br>
        Kasir
        <br><br>
        Admin
    </div>
</div>
