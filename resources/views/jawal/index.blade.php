@extends('layouts.app')

@section('content')
<div style="padding: 2rem;">
    <h2>Daftar Jadwal Ibadah</h2>

    <a href="{{ route('jadwal.create') }}" style="background:#091801; padding:10px 15px; color:#6c8f8a; border-radius:5px;">+ Tambah Jadwal</a>

    @if (session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <table border="1" cellpadding="10" cellspacing="0" style="width:100%; margin-top:1rem; background:#6c8f8a; color:black;">
        <thead>
            <tr>
                <th>Judul</th>
                <th>Tanggal</th>
                <th>Waktu</th>
                <th>Lokasi</th>
                <th>Pengkhotbah</th>
                <th>Link YouTube</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($jadwals as $jadwal)
                <tr>
                    <td>{{ $jadwal->judul }}</td>
                    <td>{{ $jadwal->tanggal }}</td>
                    <td>{{ $jadwal->waktu }}</td>
                    <td>{{ $jadwal->lokasi }}</td>
                    <td>{{ $jadwal->pengkhotbah }}</td>
                    <td>
                        @if($jadwal->link_youtube)
                            <a href="{{ $jadwal->link_youtube }}" target="_blank">Tonton</a>
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('jadwal.edit', $jadwal->id) }}">Edit</a> |
                        <form action="{{ route('jadwal.destroy', $jadwal->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Hapus jadwal ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection