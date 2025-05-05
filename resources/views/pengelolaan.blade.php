@extends('layouts.layoutUtama')

@section('content')
<div class="max-w-6xl mx-auto px-8 mt-8">
    <div class="bg-white shadow-md rounded-lg p-6">
        <div class="flex items-center justify-between mb-4">
            <h2 class="text-2xl font-bold text-emerald-700">Pengelolaan Data Obat</h2>
            <a href="#" class="bg-emerald-600 hover:bg-emerald-700 text-white px-4 py-2 rounded-lg shadow-md">
                + Tambah Obat
            </a>
        </div>


        <div class="mb-4">
            <input type="text" placeholder="Cari nama obat..." class="w-full border rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-emerald-500">
        </div>


        <div class="overflow-x-auto">
            <table class="min-w-full bg-white text-sm">
                <thead>
                    <tr class="bg-emerald-100 text-emerald-700 text-left">
                        <th class="px-4 py-2">Nama Obat</th>
                        <th class="px-4 py-2">Penjelasan</th>
                        <th class="px-4 py-2">Jumlah</th>
                        <th class="px-4 py-2">Harga (Rp)</th>
                        <th class="px-4 py-2 text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody class="text-gray-700">
                    @foreach ($dataObat as $obat)
                        <tr class="border-t">
                            <td class="px-4 py-2">{{ $obat['nama_obat'] }}</td>
                            <td class="px-4 py-2">{{ $obat['penjelasan'] }}</td>
                            <td class="px-4 py-2">{{ $obat['jumlah'] }}</td>
                            <td class="px-4 py-2">Rp{{ number_format($obat['harga'], 0, ',', '.') }}</td>
                            <td class="px-4 py-2 text-center">
                                <form   >
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" title="Hapus"
                                    class="bg-red-500 hover:bg-red-600 text-white p-2 rounded-[10px] transition duration-200 shadow-md flex items-center justify-center ml-5">
                                    <p>🗑️</p>
                                </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach

                    @if(count($dataObat) === 0)
                        <tr>
                            <td colspan="5" class="text-center py-4 text-gray-500">Tidak ada data obat.</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
