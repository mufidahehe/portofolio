@extends('layouts.app')

@section('title', 'Pesan Masuk')

@section('content')
<div class="container" style="padding-top: 120px; padding-bottom: 50px;">

   <div class="container" style="padding-top: 120px; padding-bottom: 50px;">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="fw-bold">Pesan Masuk 📥</h1>
    </div>
  
    <div class="card border-0 shadow-lg rounded-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover align-middle">
                    <thead class="table-light">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Email</th>
                            <th scope="col">Subjek</th>
                            <th scope="col">Diterima</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($messages as $message)
                            <tr style="transition: all 0.2s;">
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $message->name }}</td>
                                <td>{{ $message->email }}</td>
                                <td>{{ Str::limit($message->subject, 30) }}</td>
                                <td><span class="badge bg-success">{{ $message->created_at->format('d M Y, H:i') }}</span></td>
                                <td>
                                    <button type="button" class="btn btn-sm btn-gradient-primary" data-bs-toggle="modal" data-bs-target="#messageModal{{ $message->id }}">
                                        <i class="bi bi-envelope-open"></i> Lihat
                                    </button>
                                </td>
                            </tr>

                            <div class="modal fade" id="messageModal{{ $message->id }}" tabindex="-1" aria-labelledby="messageModalLabel{{ $message->id }}" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content border-0 shadow-lg rounded-4">
                                        <div class="modal-header bg-gradient-primary text-white">
                                            <h5 class="modal-title" id="messageModalLabel{{ $message->id }}">Detail Pesan dari: {{ $message->name }}</h5>
                                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <p><strong>Email:</strong> {{ $message->email }}</p>
                                            <p><strong>Subjek:</strong> {{ $message->subject }}</p>
                                            <hr>
                                            <p>{{ $message->message }}</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-gradient-secondary" data-bs-dismiss="modal">Tutup</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center text-muted">Belum ada pesan yang masuk.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<style>

.table-hover tbody tr:hover {
    background-color: #ffe6f0;
    cursor: pointer;
    transform: translateY(-1px);
    transition: all 0.2s;
}

.btn-gradient-primary {
    background: linear-gradient(90deg, #FF758C, #FF7EB3);
    color: white;
    border: none;
    transition: transform 0.2s, box-shadow 0.2s;
}
.btn-gradient-primary:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 15px rgba(255, 114, 135, 0.3);
}

.btn-gradient-secondary {
    background: linear-gradient(90deg, #6c757d, #adb5bd);
    color: white;
    border: none;
}
</style>
@endsection
