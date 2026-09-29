@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-6 col-lg-5">
        <div class="card border-0 shadow-sm rounded-4 overflow-hidden">
            <div class="card-header text-center py-3 border-0" style="background-color: #fff0f5;">
                <h5 class="mb-0 fw-bold fs-5" style="color: #ff8fa3;">Buat Pengguna Baru</h5>
            </div>
            <div class="card-body p-4">
                <form action="{{ route('user.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="nama" class="form-label fw-semibold text-secondary">Nama Lengkap</label>
                        <input type="text" class="form-control rounded-3 py-2" id="nama" name="nama" placeholder="Masukkan Nama" required>
                    </div>

                    <div class="mb-3">
                        <label for="npm" class="form-label fw-semibold text-secondary">NPM</label>
                        <input type="text" class="form-control rounded-3 py-2" id="npm" name="npm" placeholder="Masukkan NPM" required>
                    </div>

                    <div class="mb-4">
                        <label for="kelas_id" class="form-label fw-semibold text-secondary">Kelas</label>
                        <select name="kelas_id" id="kelas_id" class="form-select rounded-3 py-2" required>
                            <option value="" disabled selected>-- Pilih Kelas --</option>
                            @foreach ($kelas as $kelasItem)
                                <option value="{{ $kelasItem->id }}">{{ $kelasItem->nama_kelas }}</option>
                            @endforeach
                        </select>
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