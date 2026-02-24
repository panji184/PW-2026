<!DOCTYPE html>
<html>
<head>
    <title>Data Tiket Pesawat</title>
    <link rel="stylesheet" href="{{ asset('css/tiket.css') }}">
</head>
<body>

<div class="wrapper">

    <div class="table-section">
        <h2>Data Tiket</h2>

        <table border="1">
            <tr>
                <th>Maskapai</th>
                <th>Asal</th>
                <th>Tujuan</th>
                <th>Tanggal</th>
                <th>Harga</th>
                <th>Aksi</th>
            </tr>

            @foreach($tikets as $t)
            <tr>
                <td>{{ $t->maskapai }}</td>
                <td>{{ $t->asal }}</td>
                <td>{{ $t->tujuan }}</td>
                <td>{{ $t->tanggal }}</td>
                <td>{{ $t->harga }}</td>
                <td>
                    <form action="/tiket/{{ $t->id }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>

    <div class="container">
        <div class="card">
            <h2>Tambah Tiket</h2>
            <form method="POST" action="{{ route('tiket.store') }}">
                @csrf

                <div class="form-group">
        <select name="maskapai" required>
            <option value="">-- Pilih Maskapai --</option>
            <option value="Santos Air Premium">Santos Air Premium</option>
            <option value="Santos Air Regular">Santos Air Regular</option>
        </select>
    </div>

    <div class="form-group">
        <select name="asal" required>
            <option value="">-- Pilih Asal --</option>
            <option value="Cimahi">Cimahi</option>
            <option value="Bandung">Bandung</option>
            <option value="Bandung Barat">Bandung Barat</option>
            <option value="Kabupaten Bandung">Kabupaten Bandung</option>
            <option value="Jakarta">Jakarta</option>
        </select>
    </div>

    <div class="form-group">
        <select name="tujuan" required>
            <option value="">-- Pilih Tujuan --</option>
            <option value="Cimahi">Cimahi</option>
            <option value="Bandung">Bandung</option>
            <option value="Bandung Barat">Bandung Barat</option>
            <option value="Kabupaten Bandung">Kabupaten Bandung</option>
            <option value="Jakarta">Jakarta</option>
        </select>
    </div>

    <div class="form-group">
        <input type="date" name="tanggal" required>
    </div>

    <div class="form-group">
        <select name="harga" required>
            <option value="">-- Pilih Harga --</option>
            <option value="1000000">1.000.000</option>
            <option value="2000000">2.000.000</option>
            <option value="3000000">3.000.000</option>
        </select>
    </div>

    <button type="submit" class="btn-primary">Simpan</button>
            </form>
        </div>
    </div>

</div>

</body>
</html>