<div class="table-responsive">
    <table class="table table-hover align-middle mb-0" style="width: 100%;">
        <thead class="bg-light">
            <tr>
                <th scope="col" class="py-2 px-3 fw-bold" style="color: #e88dad; width: 8%;">No</th>
                <th scope="col" class="py-2 px-3 fw-bold" style="color: #e88dad; width: 30%;">Nama Lengkap</th>
                <th scope="col" class="py-2 px-3 fw-bold" style="color: #e88dad; width: 32%;">NPM</th>
                <th scope="col" class="py-2 px-3 fw-bold text-center" style="color: #e88dad; width: 15%;">Kelas</th>
                <th scope="col" class="py-2 px-3 fw-bold text-center" style="color: #e88dad; width: 15%;">Aksi</th>
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
                    <td class="py-2 px-3 text-center">
                        <div class="d-flex justify-content-center gap-1">
                            <a href="{{ route('user.edit', $user->id) }}" class="btn btn-sm btn-outline-primary">Edit</a>
                            <form action="{{ route('user.destroy', $user->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-outline-danger" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="text-center py-4 text-muted">
                        Belum ada data mahasiswa.
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>