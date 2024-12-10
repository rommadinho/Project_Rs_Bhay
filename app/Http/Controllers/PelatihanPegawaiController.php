<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PelatihanPegawai;

class PelatihanPegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Mendapatkan semua data pelatihan dengan data pegawai terkait
        $pelatihans = PelatihanPegawai::with('pegawai')->get();

        // Kirim data ke view
        return view('pelatihan.index', compact('pelatihans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pelatihans = PelatihanPegawai::with('pegawai')->get();
        // Menampilkan form tambah pelatihan
        return view('pelatihan.create', compact('pelatihans'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi data input
        $request->validate([
            'pegawai_id' => 'required|exists:pegawais,id', // Validasi pegawai_id harus ada di tabel pegawais
            'tanggal_mulai' => 'required|date',
            'tanggal_selesai' => 'required|date|after:tanggal_mulai', // tanggal_selesai harus setelah tanggal_mulai
        ]);

        // Menyimpan data pelatihan baru
        PelatihanPegawai::create($request->only(['pegawai_id', 'tanggal_mulai', 'tanggal_selesai']));

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('pelatihan.index')->with('success', 'Data pelatihan berhasil ditambahkan.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        // Mengambil data pelatihan berdasarkan ID
        $pelatihans = PelatihanPegawai::findOrFail($id);

        // Menampilkan form edit pelatihan
        return view('pelatihan.edit', compact('pelatihans'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validasi data input
        $request->validate([
            'pegawai_id' => 'required|exists:pegawais,id', // Validasi pegawai_id harus ada di tabel pegawais
            'tanggal_mulai' => 'required|date',
            'tanggal_selesai' => 'required|date|after:tanggal_mulai', // tanggal_selesai harus setelah tanggal_mulai
        ]);

        // Mengambil data pelatihan berdasarkan ID
        $pelatihans = PelatihanPegawai::findOrFail($id);

        // Mengupdate data pelatihan
        $pelatihans->update($request->only(['pegawai_id', 'tanggal_mulai', 'tanggal_selesai']));

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('pelatihan.index')->with('success', 'Data pelatihan berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            // Mengambil data pelatihan berdasarkan ID
            $pelatihans = PelatihanPegawai::findOrFail($id);

            // Menghapus data pelatihan
            $pelatihans->delete();

            // Redirect ke halaman index dengan pesan sukses
            return redirect()->route('pelatihan.index')->with('success', 'Data pelatihan berhasil dihapus.');
        } catch (\Exception $e) {
            // Redirect ke halaman index dengan pesan error jika terjadi kesalahan
            return redirect()->route('pelatihan.index')->with('error', 'Data pelatihan gagal dihapus.');
        }
    }
}
