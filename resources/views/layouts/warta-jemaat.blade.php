@extends('layouts.app')

@section('content')
<style>
    .warta-container {
        max-width: 1000px;
        margin: 2rem auto;
        background: linear-gradient(to right, #203A43, #2C5364);
        color: #f5f5f5;
        border-radius: 15px;
        box-shadow: 0 4px 10px rgba(0,0,0,0.4);
        padding: 2rem;
        font-family: 'Segoe UI', sans-serif;
    }
    .warta-header h2 {
        font-size: 2.5rem;
        margin-bottom: 0.3rem;
    }
    .warta-header p {
        font-size: 1.1rem;
        margin-bottom: 1.5rem;
        color: #cce;
    }
    .warta-list {
        text-align: left;
        margin-bottom: 2rem;
        line-height: 1.7;
    }
    .warta-list li::marker {
        color: #ffcc00;
    }
    .warta-list b {
        color: #ffdd77;
    }
    .warta-verse {
        font-style: italic;
        font-size: 1.1rem;
        border-top: 1px solid #999;
        padding-top: 1.2rem;
        margin-top: 1rem;
        color: #eee;
        text-align: center;
    }
    .warta-verse b {
        font-size: 1.2rem;
        color: #fff;
    }
</style>

<div class="warta-container">
    <div class="warta-header" style="text-align: center;">
        <h2>📣 Warta Jemaat</h2>
        <p>Informasi penting dan pengumuman untuk jemaat GBI minggu ini</p>
    </div>

    <ul class="warta-list">
        <li><b>Ibadah Umum:</b> Setiap hari Minggu pukul 09.00 WIB di Gedung Gereja Utama.</li>
        <li><b>Ibadah Pemuda:</b> Sabtu pukul 17.00 WIB di Aula Serbaguna.</li>
        <li><b>Ibadah Kaum Ibu:</b> Rabu pukul 10.00 WIB. Diundang seluruh ibu jemaat untuk hadir.</li>
        <li><b>Kegiatan Doa Pagi:</b> Senin–Jumat pukul 05.30 WIB secara online (Zoom link di grup WA).</li>
        <li><b>Baptisan Air:</b> Akan dilaksanakan Minggu, 30 Juni 2025. Pendaftaran melalui sekretariat.</li>
        <li><b>Kunjungan Pelayanan:</b> Tim diakonia akan mengunjungi jemaat yang sakit pada hari Sabtu.</li>
    </ul>

    <div class="warta-verse">
        <b>“Karena di mana dua atau tiga orang berkumpul dalam nama-Ku, di situ Aku ada di tengah-tengah mereka.”</b><br>
         Matius 18:20
    </div>
</div>
@endsection
