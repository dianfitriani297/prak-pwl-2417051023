@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-10">
            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert" style="background-color: #fce4ec; color: #d86b9a; border-color: #f8a5c2; border-radius: 8px;">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <div class="card shadow-sm border-0 rounded-4">
                <div class="card-header text-center py-3 rounded-top-4" style="background-color: #fce4ec; border-bottom: none;">
                    <h4 class="fw-bold mb-0" style="color: #f8a5c2;">{{ $title }}</h4>
                </div>
                <div class="card-body p-4 bg-white rounded-bottom-4">
                    <div class="table-responsive">
                        <table class="table table-hover align-middle mb-0" style="width: 100%;">
                            <thead class="bg-light">
                                <tr>
                                    <th scope="col" class="py-2 px-3 fw-bold" style="color: #e88dad; width: 8%;">No</th>
                                    <th scope="col" class="py-2 px-3 fw-bold" style="color: #e88dad; width: 45%;">Nama Mata Kuliah</th>
                                    <th scope="col" class="py-2 px-3 fw-bold text-center" style="color: #e88dad; width: 20%;">SKS</th>
                                    <th scope="col" class="py-2 px-3 fw-bold text-center" style="color: #e88dad; width: 25%;">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($mks as $index => $mk)
                                    <tr>
                                        <td class="py-2 px-3 text-secondary">{{ $loop->iteration }}</td>
                                        <td class="py-2 px-3 fw-semibold text-dark">{{ $mk->nama_mk }}</td>
                                        <td class="py-2 px-3 text-center">{{ $mk->sks }}</td>
                                        <td class="py-2 px-3 text-center">
                                            <div class="d-flex justify-content-center gap-1">
                                                <a href="{{ route('matakuliah.edit', $mk->id) }}" class="btn btn-sm btn-outline-primary">Edit</a>
                                                <form action="{{ route('matakuliah.destroy', $mk->id) }}" method="POST" style="display:inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-outline-danger" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="4" class="text-center py-4 text-muted">
                                            Belum ada data mata kuliah.
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection