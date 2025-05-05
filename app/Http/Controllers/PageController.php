<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{

    public function showLogin()
    {
        return view('login');
    }
    public function logout(Request $request)
    {
        session()->flush(); 
        return redirect()->route('login')->with('success', 'Berhasil logout.');
    }

    public function loginhalaman(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');
        $dataakun = [
            ['nama'=> 'Adiminstrator A','username' => 'admin', 'password' => '123', 'email' => 'admin@gmail.com', 'no_hp' => '08231010333'],
            ['nama'=> 'Artoria caster','username' => 'Caster', 'password' => 'abc', 'email' => 'artoria@gmail.com', 'no_hp' => '082313020333'],
            ['nama'=> 'Adiminstrator b','username' => 'adminb', 'password' => '1234', 'email' => 'adminb@gmail.com', 'no_hp' => '08520120386'],
        ];

        foreach ($dataakun as $user) {
            if ($user['username'] === $username && $user['password'] === $password) {
                session(['user' => $user]);session(['user' => $user]);
                return redirect()->route('dashboard', ['username' => $username]);
            }

        }
        return redirect()->route('login')->with('error', 'Username atau Password yang Dimasukkan Salah');
    }

    public function showDashboard(Request $request)
    {

        $username = $request->query('username');

        return view('dashboard', ['username' => $username]);
    }

    public function showProfil(Request $request) {
        $user = session('user');
        $username = $request->query('username');

        return view('profil', compact('user'),['username' => $username]);
    }


    public function showPengelolaan(Request $request) {
        $dataObat = [
            [
                'nama_obat' => 'Paracetamol',
                'penjelasan' => 'Obat untuk meredakan demam dan nyeri ringan hingga sedang.',
                'jumlah' => 100,
                'harga' => 2500
            ],
            [
                'nama_obat' => 'Amoxicillin',
                'penjelasan' => 'Antibiotik untuk mengobati berbagai infeksi bakteri.',
                'jumlah' => 80,
                'harga' => 4000
            ],
            [
                'nama_obat' => 'Ibuprofen',
                'penjelasan' => 'Obat antiinflamasi non-steroid untuk nyeri dan peradangan.',
                'jumlah' => 120,
                'harga' => 3000
            ],
            [
                'nama_obat' => 'Cetirizine',
                'penjelasan' => 'Obat antihistamin untuk meredakan gejala alergi.',
                'jumlah' => 60,
                'harga' => 3500
            ],
            [
                'nama_obat' => 'Omeprazole',
                'penjelasan' => 'Digunakan untuk mengurangi asam lambung berlebih.',
                'jumlah' => 75,
                'harga' => 5000
            ],
            [
                'nama_obat' => 'Metformin',
                'penjelasan' => 'Obat untuk mengontrol kadar gula darah pada pasien diabetes tipe 2.',
                'jumlah' => 90,
                'harga' => 4500
            ],
        ];

        return view('pengelolaan', ['dataObat' => $dataObat]);
    }





}
