@extends('layout.app')

@section('content')
    <div class="container">
        <h1 class="mb-4">Daftar Pelatihan</h1>
        
        <!-- Tombol Tambah Pelatihan -->
        <a href="/tambah-pelatihan" class="btn btn-primary mb-4">Tambah Pelatihan</a>

        <!-- Tabel Pelatihan -->
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th>#</th>
                        <th>Nama Pelatihan</th>
                        <th>Kategori</th>
                        <th>Jumlah Peserta</th>
                        <th>Tanggal Mulai</th>
                        <th>Tanggal Selesai</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($pelatihans as $pelatihan)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $pelatihan->nama_pelatihan }}</td>
                            <td>{{ $pelatihan->kategori }}</td>
                            <td>{{ $pelatihan->jumlah_peserta }}</td>
                            <td>{{ $pelatihan->tanggal_mulai }}</td>
                            <td>{{ $pelatihan->tanggal_selesai }}</td>
                            <td>
                                <a href="/edit-pelatihan/{{ $pelatihan->id }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="/hapus-pelatihan/{{ $pelatihan->id }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus pelatihan ini?')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection