@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card shadow-sm border-0 rounded-4">
                <div class="card-header text-center py-3 rounded-top-4" style="background-color: #fce4ec; border-bottom: none;">
                    <h4 class="fw-bold mb-0" style="color: #f8a5c2;">{{ $title }}</h4>
                </div>
                <div class="card-body p-4 bg-white rounded-bottom-4">
                    <div class="table-responsive">
                        <table class="table table-hover align-middle mb-0">
                            <thead>
                                <tr>
                                    <th class="py-2 px-3 fw-bold text-secondary" style="width: 35%;">ID</th>
                                    <th class="py-2 px-3 fw-bold text-secondary" style="width: 50%;">Nama Mata Kuliah</th>
                                    <th class="py-2 px-3 fw-bold text-secondary text-center" style="width: 15%;">SKS</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($mks as $mk)
                                    <tr>
                                        <td class="small text-secondary">{{ $mk->id }}</td>
                                        <td>{{ $mk->nama_mk }}</td>
                                        <td class="text-center">{{ $mk->sks }}</td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="3" class="text-center text-muted py-3">Belum ada mata kuliah.</td>
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