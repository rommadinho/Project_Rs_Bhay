@extends('pelatihan.index')

@section('content')
<div class="container">
    <h2 class="mb-4">Edit Pelatihan</h2>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('pelatihan.edit', $pelatihans->id) }}" method="POST">
                @csrf
                @method('PUT')
                
                <div class="form-group">
                    <label for="nama_pelatihan">Nama Pelatihan</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="{{ $pelatihans->nama_pelatihan }}" required>
                </div>
                
                <div class="form-group">
                    <label for="tanggal_mulai">Tanggal Mulai</label>
                    <input type="date" class="form-control" id="tanggal_mulai" name="tanggal_mulai" value="{{ $pelatihans->tanggal_mulai }}" required>
                </div>
                
                <div class="form-group">
                    <label for="tanggal_selesai">Tanggal Selesai</label>
                    <input type="date" class="form-control" id="tanggal_selesai" name="tanggal_selesai" value="{{ $pelatihans->tanggal_selesai }}" required>
                </div>
                
                <button type="submit" class="btn btn-primary mt-3">Simpan Perubahan</button>
            </form>
        </div>
    </div>
</div>
@endsection
