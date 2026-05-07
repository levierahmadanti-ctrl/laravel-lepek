<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Gunung</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #f4f7f9;
            margin: 0;
            padding: 20px;
        }

        h1 {
            text-align: center;
            margin-bottom: 30px;
            color: #2c3e50;
        }

        .container {
            max-width: 1000px;
            margin: auto;
        }

        .card {
            background: #ffffff;
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.08);
            transition: 0.3s;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .card h2 {
            margin: 0 0 10px;
            color: #27ae60;
        }

        .info {
            margin-bottom: 8px;
            color: #555;
        }

        .label {
            font-weight: bold;
            color: #2c3e50;
        }

        .deskripsi {
            margin-top: 10px;
            line-height: 1.6;
            color: #444;
        }

        .badge {
            display: inline-block;
            padding: 5px 10px;
            background: #27ae60;
            color: white;
            border-radius: 5px;
            font-size: 12px;
        }

        .empty {
            text-align: center;
            color: #888;
            margin-top: 50px;
        }

        .btn-tambah {
            background-color: #3498db;
            color: white;
            padding: 10px 15px;
            text-decoration: none;
            border-radius: 6px;
            font-size: 14px;
        }

        .btn-edit {
            background: orange;
            color: white;
            padding: 6px 10px;
            border-radius: 5px;
            text-decoration: none;
            margin-right: 5px;
        }

        .btn-hapus {
            background: red;
            color: white;
            padding: 6px 10px;
            border-radius: 5px;
            border: none;
            cursor: pointer;
        }

        .action {
            margin-top: 10px;
        }
    </style>
</head>
<body>

<h1>Daftar Gunung</h1>

<div style="margin-bottom: 20px; text-align: right;">
    <a href="{{ route('gunung.create') }}" class="btn-tambah">+ Tambah Gunung</a>
</div>

<div class="container">
    @forelse($gunung as $g)
        <div class="card">
            <h2>{{ $g->nama_gunung }}</h2>

            <div class="info">
                <span class="label">📍 Lokasi:</span> {{ $g->lokasi }}
            </div>

            <div class="info">
                <span class="label">⏱ Estimasi Waktu:</span> {{ $g->estimasi_waktu }}
            </div>

            <div class="info">
                <span class="label">👥 Kuota:</span> 
                <span class="badge">{{ $g->kuota }} orang</span>
            </div>

            <div class="deskripsi">
                <span class="label">Deskripsi:</span><br>
                {{ $g->deskripsi }}
            </div>

            <!-- 🔥 Tombol Edit & Hapus -->
            <div class="action">
                <a href="{{ route('gunung.edit', $g->id) }}" class="btn-edit">Edit</a>

                <form action="{{ route('gunung.destroy', $g->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button class="btn-hapus" onclick="return confirm('Yakin mau hapus?')">Hapus</button>
                </form>
            </div>
        </div>
    @empty
        <div class="empty">
            Data gunung belum tersedia.
        </div>
    @endforelse
</div>

</body>
</html>