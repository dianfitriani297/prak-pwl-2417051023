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
                    @include('components.table_user')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection