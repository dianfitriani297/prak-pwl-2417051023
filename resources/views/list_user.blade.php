@extends('layouts.app')

@section('content')
<div class="container my-2">
    <div class="card border-0 shadow-sm rounded-4 overflow-hidden">

        <div class="card-header text-center py-3 border-0" style="background-color: #fff0f5;">
            <h4 class="fw-bold mb-1" style="color: #ff8fa3;">List User</h4>
            <p class="text-secondary small mb-0">Data mahasiswa yang terdaftar dalam sistem</p>
        </div>

        @include('components.table_user')

    </div>
</div>
@endsection

