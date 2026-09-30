@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-sm border-0 rounded-4">
                <div class="card-header text-center py-3 rounded-top-4" style="background-color: #fce4ec; border-bottom: none;">
                    <h4 class="fw-bold mb-0" style="color: #e88dad;">{{ $title }}</h4>
                </div>
                <div class="card-body p-4 bg-white rounded-bottom-4">
                    <form action="{{ route('matakuliah.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="nama_mk" class="form-label fw-semibold text-secondary">Nama Mata Kuliah</label>
                            <input type="text" class="form-control rounded-3" id="nama_mk" name="nama_mk" placeholder="Masukkan Nama Mata Kuliah" required>
                        </div>
                        <div class="mb-3">
                            <label for="sks" class="form-label fw-semibold text-secondary">SKS</label>
                            <input type="number" class="form-control rounded-3" id="sks" name="sks" placeholder="Masukkan Jumlah SKS" required>
                        </div>
                        <div class="d-flex gap-2 mt-4">
                            <button type="submit" class="btn text-white fw-semibold rounded-pill px-4" style="background-color: #e88dad;">Simpan Data</button>
                            <a href="{{ url('/matakuliah') }}" class="btn btn-light fw-semibold rounded-pill px-4 text-secondary border">Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection