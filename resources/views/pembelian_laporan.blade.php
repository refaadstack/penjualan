<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<div class="container">
<div class="row">
    <div class="col-md-12 text-center">
        <h3>PT ABC </h3>
        <h3>Jalan Sudirman</h3>

    </div>
</div>
    <div class="row">
        <table class="table table-bordered table-hover bg-white">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>TANGGAL</th>
                    <th>PELANGGAN</th>
                    <th>TOTAL</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pembelian as $row)
                    @php
                        $totalSemua[]=$row->total;
                    @endphp
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $row->created_at }}</td>
                        <td>{{ $row->nama_pemasok }}</td>
                        <td>{{ $row->total }}</td>
                    </tr>
                @endforeach
            </tbody>
            <tr>
                <td colspan="3">Total</td>
                <td colspan="1">{{ number_format(@array_sum($totalSemua),0,'.','.') }}</td>
            </tr>
        </table>
    </div>
    <div class="row">
        Jambi,  <br>
        Kasir
        <br><br>
        Admin
    </div>
</div>