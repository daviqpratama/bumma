@extends('layouts.navigation')

@section('content')
<div class="container mt-5" style="padding-top: 80px;">
    <!-- Gambar Besar Tengah -->
    <div class="d-flex justify-content-center" style="height: 80vh; display: flex; justify-content: center; align-items: center;">
        <img src="{{ asset('images/adat.jpg') }}" style="max-width: 1169.78px; max-height: 658px; width: 100%; height: auto;" alt="Gambar Adat">
    </div>

    <!-- Teks Deskripsi -->
    <div class="text-center mt-5" style="font-size: 1.2rem; color: #333; padding-top: 40px;">
        <p><strong>Badan Usaha Milik Masyarakat Adat (BUMMA) Papua</strong> adalah sebuah entitas usaha yang dimiliki dan dikelola oleh komunitas adat dengan tujuan utama meningkatkan kesejahteraan masyarakat adat di Papua melalui pengelolaan sumber daya alam dan ekonomi berbasis kearifan lokal.</p>
        <p><strong>BUMMA Mare dan Namblong</strong> dibentuk sebagai inisiatif marga-marga Sub Suku Namblong dan Mare untuk membantu pemberdayaan ekonomi masyarakat adat di wilayah Mare dan Namblong di Papua.</p>
    </div>
</div>
@endsection
