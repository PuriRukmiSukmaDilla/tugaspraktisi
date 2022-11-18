<!DOCTYPE html>
<html>
<head>
<title>Laravel Saya</title>
</head>
<body>
<h3><b>Data Barang</b></h3>
<table border="1">
<thead>
<tr>
<th>No</th>
<th>Nama</th>
<th>Kategori</th>
<th>Qty</th>
<th>Harga Beli</th>
<th>Harga Jual</th>
</tr>
</thead>
<tbody>
<tr>
@foreach ($barang as $p)
<tr>
<td>{{ $loop->iteration }}</td>
<td>{{ $p->nama }}</td>
<td>{{ $p->id_kategori }}</td>
<td>{{ $p->qty }}</td>
<td>{{ $p->harga_beli }}</td>
<td>{{ $p->harga_jual }}</td>
</tr>
@endforeach
</tr>
</tbody>
</table>
</body>
</html>