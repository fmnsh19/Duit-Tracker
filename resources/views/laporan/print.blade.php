<!DOCTYPE html>
<html>
<head>
    <title>Cetak Laporan Transaksi</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>
    <h2>Laporan Transaksi</h2>
    <p>Periode: {{ $startDate }} sampai {{ $endDate }}</p>
    <table>
        <thead>
            <tr>
                <th>NO</th>
                <th>TANGGAL</th>
                <th>KATEGORI</th>
                <th>NOMINAL</th>
                <th>CATATAN</th>
                <th>JENIS</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($transaksi as $index => $trx)
        <tr>
            <td>{{ $index + 1 }}</td>
            <td>{{ $trx->tanggal_transaksi }}</td>
            <td>{{ $trx->kategori->nama_kategori }}</td>
            <td>{{ number_format($trx->nominal_transaksi, 2) }}</td>
            <td>{{ $trx->catatan_transaksi }}</td>
            <td>{{ $trx->jenis_transaksi }}</td>
        </tr>
        @endforeach
        </tbody>
    </table>
    <script>
        window.print();
    </script>
</body>
</html>