<nav class="navbar navbar-expand-lg bg-white border-bottom shadow-sm mb-3">
    <div class="container-fluid px-4">
        <a class="navbar-brand fw-bold fs-5" href="/user" style="color: #f8a5c2;">
            Management User & Akademik
        </a>

        <div class="d-flex align-items-center gap-2 ms-auto">
            <a href="/matakuliah/create" 
               class="btn btn-sm fw-semibold px-3 {{ Request::is('matakuliah/create') ? 'text-white' : '' }}" 
               style="{{ Request::is('matakuliah/create') ? 'background-color: #f8a5c2;' : 'color: #f8a5c2; border: 1px solid #f8a5c2;' }}">
                + Tambah MK
            </a>

            <a href="/matakuliah" 
               class="btn btn-sm fw-semibold px-3 {{ Request::is('matakuliah') ? 'text-white' : '' }}" 
               style="{{ Request::is('matakuliah') ? 'background-color: #f8a5c2;' : 'color: #f8a5c2; border: 1px solid #f8a5c2;' }}">
                List MK
            </a>

            <a href="/user/create" 
               class="btn btn-sm fw-semibold px-3 {{ Request::is('user/create') ? 'text-white' : '' }}" 
               style="{{ Request::is('user/create') ? 'background-color: #f8a5c2;' : 'color: #f8a5c2; border: 1px solid #f8a5c2;' }}">
                + Tambah User
            </a>

            <a href="/user" 
               class="btn btn-sm fw-semibold px-3 {{ Request::is('user') && !Request::is('user/create') ? 'text-white' : '' }}" 
               style="{{ Request::is('user') && !Request::is('user/create') ? 'background-color: #f8a5c2;' : 'color: #f8a5c2; border: 1px solid #f8a5c2;' }}">
                List User
            </a>
        </div>
    </div>
</nav>