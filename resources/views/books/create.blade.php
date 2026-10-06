<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Tambah Buku - Perpustakaan UTS</title>

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        body {
            background: #f4f6f9;
            color: #333;
        }

        .navbar {
            background: #1f4e79;
            color: white;
            padding: 18px 50px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .navbar h2 {
            font-size: 22px;
        }

        .navbar a {
            color: white;
            text-decoration: none;
            font-size: 14px;
        }

        .container {
            width: 90%;
            max-width: 900px;
            margin: 40px auto;
        }

        .header {
            margin-bottom: 25px;
        }

        .header h1 {
            color: #1f4e79;
            margin-bottom: 8px;
        }

        .header p {
            color: #777;
        }

        .form-card {
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.06);
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #444;
        }

        .form-group input,
        .form-group select {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 7px;
            font-size: 14px;
        }

        .form-group input:focus,
        .form-group select:focus {
            outline: none;
            border-color: #1f4e79;
        }

        .error {
            color: #d9534f;
            font-size: 13px;
            margin-top: 5px;
        }

        .buttons {
            display: flex;
            gap: 10px;
            margin-top: 25px;
        }

        .btn {
            padding: 11px 18px;
            border-radius: 7px;
            text-decoration: none;
            border: none;
            cursor: pointer;
            font-size: 14px;
        }

        .btn-primary {
            background: #1f4e79;
            color: white;
        }

        .btn-primary:hover {
            background: #163a5c;
        }

        .btn-secondary {
            background: #e5e7eb;
            color: #333;
        }

        .btn-secondary:hover {
            background: #d1d5db;
        }

        @media (max-width: 768px) {
            .container {
                width: 94%;
            }

            .navbar {
                padding: 18px 25px;
            }
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <div class="navbar">

        <h2>📚 Perpustakaan UTS</h2>

        <a href="{{ route('dashboard') }}">
            Dashboard
        </a>

    </div>


    <!-- Container -->
    <div class="container">

        <!-- Header -->
        <div class="header">

            <h1>Tambah Buku</h1>

            <p>
                Silakan isi data buku yang ingin ditambahkan ke dalam perpustakaan.
            </p>

        </div>


        <!-- Form -->
        <div class="form-card">

            <form action="{{ route('books.store') }}" method="POST">

                @csrf


                <!-- Judul -->
                <div class="form-group">

                    <label for="title">
                        Judul Buku
                    </label>

                    <input
                        type="text"
                        id="title"
                        name="title"
                        value="{{ old('title') }}"
                        placeholder="Masukkan judul buku"
                        required
                    >

                    @error('title')
                        <div class="error">
                            {{ $message }}
                        </div>
                    @enderror

                </div>


                <!-- Penulis -->
                <div class="form-group">

                    <label for="author">
                        Penulis
                    </label>

                    <input
                        type="text"
                        id="author"
                        name="author"
                        value="{{ old('author') }}"
                        placeholder="Masukkan nama penulis"
                        required
                    >

                    @error('author')
                        <div class="error">
                            {{ $message }}
                        </div>
                    @enderror

                </div>


                <!-- Penerbit -->
                <div class="form-group">

                    <label for="publisher">
                        Penerbit
                    </label>

                    <input
                        type="text"
                        id="publisher"
                        name="publisher"
                        value="{{ old('publisher') }}"
                        placeholder="Masukkan nama penerbit"
                        required
                    >

                    @error('publisher')
                        <div class="error">
                            {{ $message }}
                        </div>
                    @enderror

                </div>


                <!-- Kategori -->
                <div class="form-group">

                    <label for="category_id">
                        Kategori
                    </label>

                    <select
                        id="category_id"
                        name="category_id"
                        required
                    >

                        <option value="">
                            -- Pilih Kategori --
                        </option>

                        @foreach($categories as $category)

                            <option
                                value="{{ $category->id }}"
                                {{ old('category_id') == $category->id ? 'selected' : '' }}
                            >
                                {{ $category->name }}
                            </option>

                        @endforeach

                    </select>

                    @error('category_id')
                        <div class="error">
                            {{ $message }}
                        </div>
                    @enderror

                </div>


                <!-- Tahun -->
                <div class="form-group">

                    <label for="year">
                        Tahun Terbit
                    </label>

                    <input
                        type="number"
                        id="year"
                        name="year"
                        value="{{ old('year') }}"
                        placeholder="Contoh: 2024"
                        min="1900"
                        max="{{ date('Y') }}"
                        required
                    >

                    @error('year')
                        <div class="error">
                            {{ $message }}
                        </div>
                    @enderror

                </div>


                <!-- Stok -->
                <div class="form-group">

                    <label for="stock">
                        Stok Buku
                    </label>

                    <input
                        type="number"
                        id="stock"
                        name="stock"
                        value="{{ old('stock') }}"
                        placeholder="Masukkan jumlah stok"
                        min="0"
                        required
                    >

                    @error('stock')
                        <div class="error">
                            {{ $message }}
                        </div>
                    @enderror

                </div>


                <!-- Tombol -->
                <div class="buttons">

                    <a
                        href="{{ route('books.index') }}"
                        class="btn btn-secondary"
                    >
                        Kembali
                    </a>

                    <button
                        type="submit"
                        class="btn btn-primary"
                    >
                        Simpan Buku
                    </button>

                </div>

            </form>

        </div>

    </div>

</body>

</html>