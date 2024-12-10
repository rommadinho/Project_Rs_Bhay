<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class Pegawaicontroller extends Controller
{
    public function index()
    {
        // Set timezone
        date_default_timezone_set('Asia/Jakarta');
        
        // Dapatkan tanggal dan jam saat ini
        $tanggal = date('Y-m-d');
        $jam = date('H:i');
        $hari = date('l');

        // Nama hari dalam bahasa Indonesia
        $namahari = [
            "Sunday" => "AKHAD",
            "Monday" => "SENIN",
            "Tuesday" => "SELASA",
            "Wednesday" => "RABU",
            "Thursday" => "KAMIS",
            "Friday" => "JUMAT",
            "Saturday" => "SABTU"
        ][$hari];

        // Ambil data dari tabel pegawai
        $pegawai = DB::table('pegawai')->get();

        // Kirim data ke view
        return view('pegawai.index', compact('pegawai', 'tanggal', 'jam'));
    }
}





