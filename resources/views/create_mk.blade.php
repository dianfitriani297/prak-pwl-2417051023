@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-6 col-lg-5">
        <div class="card border-0 shadow-sm rounded-4 overflow-hidden">
            <div class="card-header text-center py-3 border-0" style="background-color: #fff0f5;">
                <h5 class="mb-0 fw-bold fs-5" style="color: #ff8fa3;">Buat Mata Kuliah</h5>
            </div>
            <div class="card-body p-4">
                <form action="{{ route('matakuliah.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="nama_mk" class="form-label fw-semibold text-secondary">Nama Mata Kuliah</label>
                        <input type="text" class="form-control rounded-3 py-2" id="nama_mk" name="nama_mk" placeholder="Masukkan Nama Mata Kuliah" required>
                    </div>

                    <div class="mb-4">
                        <label for="sks" class="form-label fw-semibold text-secondary">SKS</label>
                        <input type="number" class="form-control rounded-3 py-2" id="sks" name="sks" placeholder="Masukkan Jumlah SKS" required>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-sm fw-semibold px-4 py-2 shadow-sm rounded-3" style="background-color: #fdf8f9; color: #ff8fa3; border: 1px solid #ffccd5;">
                            Simpan Data
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection