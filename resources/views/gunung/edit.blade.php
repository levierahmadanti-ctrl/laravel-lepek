<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Gunung</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #f4f7f9;
            padding: 20px;
        }

        .container {
            max-width: 600px;
            margin: auto;
            background: #fff;
            padding: 30px;
            border-radius: 10px;
        }

        h1 {
            text-align: center;
        }

        .form-group {
            margin-bottom: 15px;
        }

        input, textarea {
            width: 100%;
            padding: 10px;
        }

        .btn {
            width: 100%;
            padding: 10px;
            background: orange;
            color: white;
            border: none;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Edit Gunung</h1>

    <form action="{{ route('gunung.update', $gunung->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <input type="text" name="nama_gunung" value="{{ $gunung->nama_gunung }}">
        </div>

        <div class="form-group">
            <input type="text" name="lokasi" value="{{ $gunung->lokasi }}">
        </div>

        <div class="form-group">
            <input type="text" name="estimasi_waktu" value="{{ $gunung->estimasi_waktu }}">
        </div>

        <div class="form-group">
            <input type="number" name="kuota" value="{{ $gunung->kuota }}">
        </div>

        <div class="form-group">
            <textarea name="deskripsi">{{ $gunung->deskripsi }}</textarea>
        </div>

        <button class="btn">Update</button>
    </form>

    <br>
    <a href="{{ route('gunung.index') }}">← Kembali</a>
</div>

</body>
</html>