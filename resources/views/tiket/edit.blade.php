@extends('layout')

@section('content')
<div class="form-box">
    <h2>Ubah Penerbangan</h2>

    <form action="{{ route('tiket.update', $tiket->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Maskapai</label>
        <input type="text" name="maskapai" value="{{ $tiket->maskapai }}" required>

        <label>Asal</label>
        <input type="text" name="asal" value="{{ $tiket->asal }}" required>

        <label>Tujuan</label>
        <input type="text" name="tujuan" value="{{ $tiket->tujuan }}" required>

        <label>Tanggal</label>
        <input type="date" name="tanggal" value="{{ $tiket->tanggal }}" required>

        <label>Harga</label>
        <input type="number" name="harga" value="{{ $tiket->harga }}" required>

        <button type="submit">Update Ticket</button>
    </form>
</div>
@endsection