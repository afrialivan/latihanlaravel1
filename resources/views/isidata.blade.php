@extends('layouts.main')

@section('container')

<div class="kotak">

  <table>

  <form action="/isi-data" method="post">
    @csrf
    <h1>Tambah Data</h1>
    <tr>
      <td>
        <label for="tanggal">Tanggal</label>
      </td>
      <td>
        <input type="date" id="tanggal" name="tanggal">
      </td>
    </tr>
    <tr>
      <td>
        <label for="jam">Jam</label>
      </td>
      <td>
        <input type="time" id="jam" name="jam">
      </td>
    </tr>
    <tr>
      <td>
        <label for="lokasi">Lokasi yang dikunjungi</label>
      </td>
      <td>
        <input type="text" id="xlokasi" name="lokasi">
      </td>
    </tr>
    <tr>
      <td>
        <label for="suhu">Suhu Tubuh</label>
      </td>
      <td>
        <input type="number" step="any" min="-99.9" max="99.9" id="suhu" name="suhu" placeholder="Contoh : 36.3">
      </td>
    </tr>
    <tr>
      <td>
        <button type="submit" name="submit">Tambahkan</button>
      </td>
    </tr>
  </form>
</table>

</div>

@endsection