@extends('layouts.loginlayout')

@section('content')


    <div class="bg-white rounded-xl shadow-lg p-10 w-full max-w-sm ">
        <form method="POST" action="{{ route('login.tekan') }}" class="w-full">
            @csrf
            <h2 class="text-3xl font-bold mb-8 text-center">Sign In</h2>

            <div class="mb-8">
                <label for="username" class="block font-medium text-gray-950 dark:text-white text-md">Username</label>
                <input type="text" id="username" name="username" placeholder="nama"
                    class="w-full border mt-4 border-gray-300 rounded text-md px-3 py-2" required>
            </div>

            <div class="mb-8">
                <label for="password" class="block font-medium text-gray-950 dark:text-white text-md">Password</label>
                <input type="password" id="password" name="password" placeholder="@#$/"
                    class="w-full border mt-4 border-gray-300 rounded text-md px-3 py-2" required>
            </div>
            @if (session('error'))
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-6 text-sm text-center">
                {{ session('error') }}
            </div>
            @endif

            <button type="submit"
                class="w-full bg-emerald-600 text-white px-4 py-3 rounded-2xl cursor-pointer hover:opacity-80 shadow-2xl transition ease-in-out duration-300">
                Sign In
            </button>

        </form>
    </div>
@endsection

