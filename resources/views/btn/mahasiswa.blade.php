@extends('btn.index')
@section('content')
  <h1>Daftar Mahasiswa</h1>
  <table border="1">
    <tr>
      <td>Nama</td>
      <td>Nim</td>
    </tr>
    @foreach ($mahasiswa as $item)
      <tr>
        <td>{{ $item['nama'] }}</td>
        <td><a href="/mahasiswa/{{ $item['id'] }}">Detail</a></td>
      </tr>
    @endforeach
  </table>
@endsection