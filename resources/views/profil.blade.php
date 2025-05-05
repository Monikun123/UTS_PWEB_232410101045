@extends('layouts.layoutUtama')

@section('content')
<div class="max-w-6xl mx-auto px-8">

    <div class="text-left mb-12 ">
        <h2 class="text-3xl font-bold text-emerald-700 -mt-20">Selamat Datang,</h2>
        <p class="text-4xl mt-1 text-gray-600"><strong>{{ request()->query('username') }}</strong></p>
    </div>
    <div class="bg-white rounded-lg shadow-lg flex flex-col md:flex-row p-8">
        <div class="md:w-2/3 flex space-x-6 mb-6 md:mb-0 items-start">

            <div class="w-40 h-40 rounded-full bg-emerald-500 flex items-center justify-center text-white text-5xl font-bold text-center leading-none">
                {{ strtoupper(substr($user['nama'], 0, 1)) }}
            </div>


            <div>
                <h3 class="text-2xl font-semibold mb-6 text-emerald-600">Profil Akun</h3>
                <div class="space-y-4 text-lg text-gray-700">
                    <p><strong>Nama:</strong> {{ $user['nama'] }}</p>
                    <p><strong>Username:</strong> {{ $user['username'] }}</p>
                    <p><strong>Email:</strong> {{ $user['email'] }}</p>
                    <p><strong>No HP:</strong> {{ $user['no_hp'] }}</p>
                </div>
            </div>
        </div>

        <div class="md:w-1/3 flex items-center justify-center">
            <a href=""
                class="bg-emerald-600 hover:bg-emerald-700 text-white font-semibold px-6 py-3 rounded-lg shadow-md transition duration-300">
                 Edit Profil
             </a>
        </div>
    </div>
</div>

@endsection
