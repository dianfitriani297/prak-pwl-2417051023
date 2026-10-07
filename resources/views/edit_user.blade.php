@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-6 col-lg-5">
        <div class="card border-0 shadow-sm rounded-4 overflow-hidden">
            <div class="card-header text-center py-3 border-0" style="background-color: #fff0f5;">
                <h5 class="mb-0 fw-bold fs-5" style="color: #ff8fa3;">Edit User</h5>
            </div>
            <div class="card-body p-4">
                <form action="{{ route('user.update', $user->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    
                    <div class="mb-3">
                        <label for="nama" class="form-label fw-semibold text-secondary">Nama</label>
                        <input type="text" class="form-control rounded-3 py-2" id="nama" name="nama" value="{{ $user->nama }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="npm" class="form-label fw-semibold text-secondary">NPM</label>
                        <input type="text" class="form-control rounded-3 py-2" id="npm" name="npm" value="{{ $user->npm }}" required>
                    </div>

                    <div class="mb-4">
                        <label for="kelas_id" class="form-label fw-semibold text-secondary">Kelas</label>
                        <select name="kelas_id" id="kelas_id" class="form-select rounded-3 py-2" required>
                            @foreach ($kelas as $k)
                                <option value="{{ $k->id }}" {{ $user->kelas_id == $k->id ? 'selected' : '' }}>
                                    {{ $k->nama_kelas }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="d-flex justify-content-center gap-2">
                        <button type="submit" class="btn btn-sm fw-semibold px-4 py-2 shadow-sm rounded-pill" style="background-color: #fdf8f9; color: #ff8fa3; border: 1px solid #ffccd5; width: 110px;">
                            Update
                        </button>
                        <a href="{{ url('/user') }}" class="btn btn-sm fw-semibold px-4 py-2 shadow-sm rounded-pill text-center" style="background-color: #fdf8f9; color: #ff8fa3; border: 1px solid #ffccd5; width: 110px;">
                            Batal
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection