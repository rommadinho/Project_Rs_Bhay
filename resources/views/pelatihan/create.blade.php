@extends('pelatihan.dashboard')

@section('content')
    <div class="container">
        <h1 class="mb-4">Tambah Pelatihan</h1>
        <form action="{{ route('pelatihan.store') }}" method="POST">
            @csrf

            <!-- Input Nama Pelatihan -->
            <div class="form-group mb-3">
                <label for="nama_pelatihan">Nama Pelatihan</label>
                <input type="text" name="nama_pelatihan" id="nama_pelatihan" class="form-control" value="{{ old('nama_pelatihan') }}">
                @error('nama_pelatihan')
                    <small class="form-text text-danger">{{ $message }}</small>
                @enderror
            </div>

            <!-- Input Kategori -->
            <div class="form-group mb-3">
                <label for="kategori">Kategori</label>
                <input type="text" name="kategori" id="kategori" class="form-control" value="{{ old('kategori') }}">
                @error('kategori')
                    <small class="form-text text-danger">{{ $message }}</small>
                @enderror
            </div>

            <!-- Input Jumlah Peserta -->
            <div class="form-group mb-3">
                <label for="jumlah_peserta">Jumlah Peserta</label>
                <input type="number" name="jumlah_peserta" id="jumlah_peserta" class="form-control" value="{{ old('jumlah_peserta') }}">
                @error('jumlah_peserta')
                    <small class="form-text text-danger">{{ $message }}</small>
                @enderror
            </div>

            <!-- Input Tanggal Mulai -->
            <div class="form-group mb-3">
                <label for="tanggal_mulai">Tanggal Mulai</label>
                <input type="date" name="tanggal_mulai" id="tanggal_mulai" class="form-control" value="{{ old('tanggal_mulai') }}">
                @error('tanggal_mulai')
                    <small class="form-text text-danger">{{ $message }}</small>
                @enderror
            </div>

            <!-- Input Tanggal Selesai -->
            <div class="form-group mb-3">
                <label for="tanggal_selesai">Tanggal Selesai</label>
                <input type="date" name="tanggal_selesai" id="tanggal_selesai" class="form-control" value="{{ old('tanggal_selesai') }}">
                @error('tanggal_selesai')
                    <small class="form-text text-danger">{{ $message }}</small>
                @enderror
            </div>

            <!-- Tombol Simpan -->
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection
