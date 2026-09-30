<div class="table-responsive">
    <table class="table table-hover align-middle mb-0" style="width: 100%;">
        <thead class="bg-light">
            <tr>
                <th scope="col" class="py-2 px-3 fw-bold" style="color: #ff8fa3; width: 8%;">No</th>
                <th scope="col" class="py-2 px-3 fw-bold" style="color: #ff8fa3; width: 35%;">Nama Lengkap</th>
                <th scope="col" class="py-2 px-3 fw-bold" style="color: #ff8fa3; width: 42%;">NPM</th>
                <th scope="col" class="py-2 px-3 fw-bold text-center" style="color: #ff8fa3; width: 15%;">Kelas</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($users as $index => $user)
                <tr>
                    <td class="py-2 px-3 text-secondary">{{ $loop->iteration }}</td>
                    <td class="py-2 px-3 fw-semibold text-dark">{{ $user->nama }}</td>
                    <td class="py-2 px-3 text-secondary">
                        <span class="bg-light px-2 py-1 rounded border text-dark font-monospace small">
                            {{ $user->npm }}
                        </span>
                    </td>
                    <td class="py-2 px-3 text-center">
                        <span class="badge rounded-pill fw-semibold px-3 py-2 text-secondary bg-light border">
                            {{ $user->nama_kelas ?? '-' }}
                        </span>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="text-center py-4 text-muted">
                        Belum ada data mahasiswa.
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>