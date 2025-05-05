@extends('layouts.layoutUtama')

@section('content')
    <div class="text-left mb-12 ml-40 -mt-20">
        <h2 class="text-3xl font-bold text-emerald-700 -mt-20">Selamat Datang,</h2>
        <p class="text-4xl mt-4 text-gray-600"><strong>{{ request()->query('username') }}</strong></p>
    </div>

    <div class="flex flex-col md:flex-row items-center md:items-start md:justify-between bg-white p-6 rounded-lg shadow-md w-full max-w-5xl mx-auto">
        <div class="md:w-1/2 mb-6 md:mb-0">
            <h3 class="text-2xl font-semibold text-emerald-700 mb-4">Tentang MediStock</h3>
            <p class="text-gray-700 leading-relaxed">
                MediStock adalah sistem informasi pengelolaan obat yang dirancang untuk membantu apotek atau instansi kesehatan dalam mengelola stok, distribusi, dan pelaporan obat secara efisien dan akurat. Dengan antarmuka yang ramah pengguna, MediStock memungkinkan pengguna untuk memantau persediaan, menambahkan obat baru, serta menghasilkan laporan secara otomatis.
            </p>
        </div>


        <div class="md:w-1/2 flex justify-center">
            <img src="https://blue.kumparan.com/image/upload/fl_progressive,fl_lossy,c_fill,q_auto:best,w_640/v1539174005/JAMU_FIX_c3l0j5.png" alt="Ilustrasi Web Farmasi" class="w-52 h-52 object-contain p-4 bg-white shadow-lg border border-gray-300">
        </div>
    </div>
@endsection
