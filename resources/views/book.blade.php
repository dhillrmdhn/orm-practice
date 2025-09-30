@extends('layouts.main')

@section('title', 'Daftar Buku')

@section('content')
<h2>Daftar Buku</h2>

<table border="1" cellpadding="10" cellspacing="0">
    <thead>
        <tr>
            <th>Judul</th>
            <th>Penulis</th>
            <th>Tahun Terbit</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Laskar Pelangi</td>
            <td>Andrea Hirata</td>
            <td>2005</td>
        </tr>
        <tr>
            <td>Bumi Manusia</td>
            <td>Pramoedya Ananta Toer</td>
            <td>1980</td>
        </tr>
        <tr>
            <td>Negeri 5 Menara</td>
            <td>Ahmad Fuadi</td>
            <td>2009</td>
        </tr>
    </tbody>
</table>
@endsection