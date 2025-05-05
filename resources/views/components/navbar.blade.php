@php
    $username = request()->query('username');
@endphp
<header class="shadow-md py-4 bg-emerald-700">
    <div class="container mx-auto flex items-center justify-between px-8">

        <div class="flex items-center">
            <img src="https://blue.kumparan.com/image/upload/fl_progressive,fl_lossy,c_fill,q_auto:best,w_640/v1539174005/JAMU_FIX_c3l0j5.png" alt="Logo Farmasi" class="w-10 h-10 mr-3">
            <h1 class="text-xl font-semibold text-lime-300">MediStock</h1>
        </div>

        <div class="flex items-center space-x-6 text-white text-sm">
            <button
                onclick="window.location='{{ route('dashboard', ['username' => session('user')['username']])  }}'"
                class="hover:text-lime-200 transition">
                Dashboard
            </button>
            <button
                onclick="window.location='{{ route('profil',['username' => session('user')['username']]) }}'"
                class="hover:text-lime-200 transition">
                Profile
            </button>
            <button
                onclick="window.location='{{ route('pengelolaan') }}'"
                class="hover:text-lime-200 transition">
                Pengelolaan
            </button>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="ml-4 bg-red-600 hover:bg-red-700 text-white px-3 py-1 rounded transition">
                    Logout
                </button>
            </form>
        </div>
    </div>
</header>

