@extends('layouts.app')

@section('content')
<div style="max-width: 900px; margin: 40px auto; padding: 20px;">
    <h2 style="text-align: center; font-size: 2rem; font-weight: bold;">📰 Berita Gereja</h2>
    <p style="text-align: center; font-size: 1rem;">Kabar terbaru seputar kegiatan, pelayanan, dan komunitas Gereja Bethel Indonesia.</p>
    <hr style="margin: 20px 0;">

    {{-- Berita 1 --}}
    <div style="display: flex; gap: 20px; margin-bottom: 40px;">
        <img src="{{ asset('img/download (1).jpeg') }}" alt="Perayaan HUT GBI" style="width: 200px; border-radius: 10px;">
        <div>
            <h3 style="font-size: 1.5rem;">🎉 Perayaan HUT GBI ke-40</h3>
            <p>Pada hari Minggu, 16 Juni 2025, GBI mengadakan ibadah syukur untuk memperingati 40 tahun pelayanan. 
            Ibadah dimeriahkan oleh tim pujian dari tim musik lokal dan khotbah oleh Pdt. Daniel Sihombing.</p>
        </div>
    </div>

    {{-- Berita 2 --}}
    <div style="display: flex; gap: 20px; margin-bottom: 40px;">
        <img src="{{ asset('img/download (2).jpeg') }}" alt="Bakti Sosial GBI" style="width: 200px; border-radius: 10px;">
        <div>
            <h3 style="font-size: 1.5rem;">🤝 Bakti Sosial GBI</h3>
            <p>Dalam rangka memperingati Hari Kasih Sayang Kristen, GBI mengadakan kegiatan bakti sosial membagikan sembako kepada warga sekitar gereja pada tanggal 10 Juni 2025. 
            Terima kasih kepada seluruh jemaat yang ikut berpartisipasi.</p>
        </div>
    </div>

    {{-- Berita 3 --}}
    <div style="display: flex; gap: 20px; margin-bottom: 40px;">
        <img src="{{ asset('img/download (4).jpeg') }}" alt="Seminar Kepemimpinan" style="width: 200px; border-radius: 10px;">
        <div>
            <h3 style="font-size: 1.5rem;">📢 Seminar Kepemimpinan Rohani</h3>
            <p>Pendaftaran dibuka untuk seminar "Kepemimpinan Sejati dalam Gereja" pada Sabtu, 6 Juli 2025. 
            Daftar melalui sekretariat atau secara online melalui Zoom yang akan dibagikan.</p>
        </div>
    </div>

    <hr>
    <p style="font-style: italic; text-align: center; margin-top: 30px;">
        "Tetapi dalam semuanya itu kita lebih dari pada orang-orang yang menang, oleh Dia yang telah mengasihi kita." — <strong>Roma 8:37</strong>
    </p>
</div>
@endsection