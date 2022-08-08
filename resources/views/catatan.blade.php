@extends('layouts.main')

@section('container')
<div class="kotak">
    <div class="container-urut">
        <h2>Urutkan Berdasarkan</h2>
        <div class="urutan">
            <form action="/catatan-perjalanan">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" name="search" placeholder="Search" aria-label="Recipient's username" aria-describedby="button-addon2">
                    <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Button</button>
                  </div>
            </form>
            <form action="/catatan-perjalanan">
                {{-- <select name="order_data" id="order_by">
                    <option value="tanggal">Tanggal</option>
                    <option value="suhu">Suhu</option>
                </select> --}}
                <select name="order_option" id="order_option">
                    <option value="" selected hidden>Pilih Opsi Pengurutan</option>
                    <option value="asc">Mengurutkan Dari Kecil</option>
                    <option value="desc">Mengurutkan Dari Besar</option>
                </select>
                <button type="submit">Urutkan</button>
            </form>
        </div>
    </div>
    <div class="container-table">

        <table>
            <tr>
                <th>Tanggal</th>
                <th>Waktu</th>
                <th>Lokasi</th>
                <th>Suhu Tubuh</th>
            </tr>
            @foreach ($catatan as $ctt)
            <tr>
                <td>{{ $ctt->tanggal }}</td>
                <td>{{ $ctt->jam }}</td>
                <td>{{ $ctt->lokasi }}</td>
                <td>{{ $ctt->suhu }}</td>
            </tr>
            @endforeach
        </table>

    </div>
</div>

@endsection