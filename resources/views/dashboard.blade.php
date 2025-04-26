@extends('layouts.navigation')

@section('content')
<div class="container mt-5" style="padding-top: 80px;">

    <!-- Gambar Besar Tengah -->
    <div class="d-flex justify-content-center"
        style="height: 80vh; display: flex; justify-content: center; align-items: center;">
        <img src="{{ asset('images/adat.jpg') }}"
            style="max-width: 1169.78px; max-height: 658px; width: 100%; height: auto;" alt="Gambar Adat">
    </div>

    <!-- Teks Deskripsi -->
    <div class="text-center mt-5" style="font-size:1.5rem; color:#333; padding-top:110px;">
        <p>Badan Usaha Milik Masyarakat Adat (BUMMA) Papua adalah</p>
        <p>sebuah entitas usaha yang dimiliki dan dikelola oleh komunitas</p>
        <p>adat dengan tujuan utama meningkatkan kesejahtraan</p>
        <p>masyarakat adat di Papua melalui pengelolaan sumber daya</p>
        <p>alam dan ekonomi berbasis kearifan lokal.</p>
        <p>BUMMA Mare dan Namblong dibentuk sebagai inisiatif marga-</p>
        <p>marga Sub Suku Namblong dan Mare untuk membantu</p>
        <p>pemberdayaan ekonomi masyarakat adat di wilayah Mare dan</p>
        <p>Namblong di Papua.</p>
    </div>

    <!-- Section Card di atas background orang.jpg -->
    <div class="flex flex-col items-center justify-center"
        style="background-image: url('{{ asset('images/orang.jpg') }}'); background-size: cover; background-position: center; margin-top: 110px; padding: 60px 0;">


        <!-- Card container -->
        <div class="flex justify-center gap-4 flex-wrap">

            <!-- Card Daftar Usaha -->
            <div class="w-[428px] h-[208px] p-4 bg-white bg-opacity-90 border border-gray-200 shadow-md flex items-start">
                <img src="{{ asset('images/pencarian.png') }}" alt="Pencarian" style="width: 50px; height: 50px; margin-right: 15px;">
                <div style="text-align: left;">
                    <h5 class="text-lg font-bold text-gray-900 mb-2">
                        Daftar Usaha
                    </h5>
                    <p class="text-sm text-gray-700 mb-4">
                        Daftar usaha yang ada.
                    </p>
                    <div class="flex justify-start mt-10">
                        <a href="#"
                            class="inline-flex items-center text-[#E5B300] font-semibold hover:underline"
                            style="font-size: 16px; padding: 8px 30px; color: #E5B300;">
                            GET STARTED<span style="margin-left: 5px;"></span>
                            <svg width="14" height="10" fill="none" stroke="#E5B300" viewBox="0 0 14 10">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Card Riwayat Transaksi -->
            <div class="w-[428px] h-[208px] p-4 bg-white bg-opacity-90 border border-gray-200 shadow-md flex items-start">
                <img src="{{ asset('images/tanggal.png') }}" alt="Tanggal" style="width: 50px; height: 50px; margin-right: 15px;">
                <div style="text-align: left;">
                    <h5 class="text-lg font-bold text-gray-900 mb-2">
                        Riwayat Transaksi
                    </h5>
                    <p class="text-sm text-gray-700 mb-4">
                        Riwayat transaksi yang pernah dilakukan.
                    </p>
                    <div class="flex justify-start mt-10">
                        <a href="#" class="inline-flex items-center text-[#E5B300] font-semibold hover:underline"
                            style="font-size: 16px; padding: 8px 30px; color: #E5B300;">
                            GET STARTED<span style="margin-left: 5px;"></span>
                            <svg width="14" height="10" fill="none" stroke="#E5B300" viewBox="0 0 14 10">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Card Distribusi Dana Sosial -->
            <div class="w-[428px] h-[208px] p-4 bg-white bg-opacity-90 border border-gray-200 shadow-md flex items-start">
                <img src="{{ asset('images/rumah.png') }}" alt="Rumah" style="width: 50px; height: 50px; margin-right: 15px;">
                <div style="text-align: left;">
                    <h5 class="text-lg font-bold text-gray-900 mb-2">
                        Distribusi Dana Sosial
                    </h5>
                    <p class="text-sm text-gray-700 mb-4">
                        Penerimaan dana sosial dan dana kebutuhan adat.
                    </p>
                    <div class="flex justify-start mt-10">
                        <a href="#" class="inline-flex items-center text-[#E5B300] font-semibold hover:underline"
                            style="font-size: 16px; padding: 8px 30px; color: #E5B300;">
                            GET STARTED<span style="margin-left: 5px;"></span>
                            <svg width="14" height="10" fill="none" stroke="#E5B300" viewBox="0 0 14 10">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

        </div>

    </div>

    <!-- Konten Baru Daftar Usaha di bawah card dan background -->
    <div class="text-center mt-8">
        <h1 class="text-4xl font-bold" style="font-size: 40px; line-height: 70px;">
            DAFTAR USAHA
        </h1>
        <div style="width: 133px; height: 12px; background-color: #3C7228; margin: 10px auto; border-radius: 6px;"></div>
        <p class="mt-4" style="font-size: 18px; color: #333;">
            Temukan berbagai usaha yang dapat Anda kelola untuk meningkatkan kesejahteraan masyarakat adat di Papua.
        </p>
    </div>

</div>
@endsection
