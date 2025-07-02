@extends('layouts.app')

@section('content')
<div style="max-width: 600px; margin: auto; padding: 2rem;">
    <h2>Edit Jadwal Ibadah</h2>

    <form action="{{ route('jadwal.update', $jadwal->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Judul</label>
        <input type="text" name="judul" value="{{ $jadwal->judul }}" required>

        <label>Tanggal</label>
        <input type="date" name="tanggal" value="{{ $jadwal->tanggal }}" required>

        <label>Waktu</label>
        <input type="time" name="waktu" value="{{ $jadwal->waktu }}" required>

        <label>Lokasi</label>
        <input type="text" name="lokasi" value="{{ $jadwal->lokasi }}" required>

        <label>Pengkhotbah</label>
        <input type="text" name="pengkhotbah" value="{{ $jadwal->pengkhotbah }}">

        <label>Link YouTube (Opsional)</label>
        <input type="url" name="link_youtube" value="{{ $jadwal->link_youtube }}">

        <button type="submit">Update</button>
    </form>
</div>
@endsection