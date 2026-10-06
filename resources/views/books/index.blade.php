<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Daftar Buku - Perpustakaan UTS</title>

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
            max-width: 1200px;
            margin: 35px auto;
        }

        .header {
            background: white;
            padding: 25px;
            border-radius: 12px;
            margin-bottom: 20px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.06);
        }

        .header h1 {
            color: #1f4e79;
            margin-bottom: 8px;
        }

        .header p {
            color: #777;
        }

        .top-menu {
            margin-top: 20px;
        }

        .btn {
            display: inline-block;
            background: #1f4e79;
            color: white;
            padding: 10px 16px;
            border-radius: 7px;
            text-decoration: none;
            font-size: 14px;
            border: none;
            cursor: pointer;
        }

        .btn:hover {
            background: #163a5c;
        }

        .btn-secondary {
            background: #6c757d;
        }

        .btn-danger {
            background: #dc3545;
        }

        .btn-warning {
            background: #f0ad4e;
        }

        .search-box {
            background: white;
            padding: 20px;
            border-radius: 12px;
            margin-bottom: 20px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.06);
        }

        .search-form {
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
        }

        .search-form input,
        .search-form select {
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 7px;
            font-size: 14px;
        }

        .search-form input {
            flex: 1;
            min-width: 200px;
        }

        .table-box {
            background: white;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.06);
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th {
            background: #1f4e79;
            color: white;
            padding: 13px;
            text-align: left;
            font-size: 14px;
        }

        td {
            padding: 13px;
            border-bottom: 1px solid #eee;
            font-size: 14px;
        }

        tr:hover {
            background: #f8f9fa;
        }

        .action {
            display: flex;
            gap: 5px;
            flex-wrap: wrap;
        }

        .action .btn {
            padding: 7px 10px;
            font-size: 12px;
        }

        .success {
            background: #d4edda;
            color: #155724;
            padding: 12px 15px;
            border-radius: 7px;
            margin-bottom: 20px;
        }

        .empty {
            text-align: center;
            padding: 40px;
            color: #777;
        }

        @media (max-width: 768px) {
            .navbar {
                padding: 15px 20px;
            }

            .container {
                width: 95%;
            }

            th, td {
                white-space: nowrap;
            }
        }
    </style>
</head>

<body>

    <div class="navbar">
        <h2>📚 Perpustakaan UTS</h2>

        <a href="{{ route('dashboard') }}">
            Dashboard
        </a>
    </div>

    <div class="container">

        <div class="header">
            <h1>📖 Daftar Buku</h1>

            <p>
                Menampilkan seluruh data buku yang tersimpan
                dalam sistem perpustakaan.
            </p>

            <div class="top-menu">
                <a href="{{ route('books.create') }}" class="btn">
                    + Tambah Buku
                </a>

                <a href="{{ route('dashboard') }}" class="btn btn-secondary">
                    ← Kembali ke Dashboard
                </a>
            </div>
        </div>

        @if(session('success'))
            <div class="success">
                {{ session('success') }}
            </div>
        @endif

        <div class="search-box">

            <form action="{{ route('books.index') }}" method="GET" class="search-form">

                <input
                    type="text"
                    name="search"
                    placeholder="Cari judul atau penulis..."
                    value="{{ request('search') }}"
                >

                <select name="category">
                    <option value="">Semua Kategori</option>

                    @foreach($categories as $category)
                        <option
                            value="{{ $category->id }}"
                            {{ request('category') == $category->id ? 'selected' : '' }}
                        >
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>

                <button type="submit" class="btn">
                    Cari
                </button>

                <a href="{{ route('books.index') }}" class="btn btn-secondary">
                    Reset
                </a>

            </form>

        </div>

        <div class="table-box">

            @if($books->count() > 0)

                <table>

                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Judul Buku</th>
                            <th>Penulis</th>
                            <th>Penerbit</th>
                            <th>Kategori</th>
                            <th>Tahun</th>
                            <th>Stok</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    <tbody>

                        @foreach($books as $book)

                            <tr>

                                <td>
                                    {{ $loop->iteration }}
                                </td>

                                <td>
                                    <strong>{{ $book->title }}</strong>
                                </td>

                                <td>
                                    {{ $book->author }}
                                </td>

                                <td>
                                    {{ $book->publisher }}
                                </td>

                                <td>
                                    {{ $book->category->name ?? '-' }}
                                </td>

                                <td>
                                    {{ $book->year }}
                                </td>

                                <td>
                                    {{ $book->stock }}
                                </td>

                                <td>

                                    <div class="action">

                                        <a
                                            href="{{ route('books.show', $book->id) }}"
                                            class="btn"
                                        >
                                            Detail
                                        </a>

                                        <a
                                            href="{{ route('books.edit', $book->id) }}"
                                            class="btn btn-warning"
                                        >
                                            Edit
                                        </a>

                                        <form
                                            action="{{ route('books.destroy', $book->id) }}"
                                            method="POST"
                                            style="display:inline;"
                                            onsubmit="return confirm('Yakin ingin menghapus buku ini?');"
                                        >

                                            @csrf
                                            @method('DELETE')

                                            <button
                                                type="submit"
                                                class="btn btn-danger"
                                            >
                                                Hapus
                                            </button>

                                        </form>

                                    </div>

                                </td>

                            </tr>

                        @endforeach

                    </tbody>

                </table>

            @else

                <div class="empty">
                    <h3>📚 Belum ada data buku</h3>
                    <p>Silakan tambahkan buku terlebih dahulu.</p>

                    <br>

                    <a href="{{ route('books.create') }}" class="btn">
                        + Tambah Buku
                    </a>
                </div>

            @endif

        </div>

    </div>

</body>
</html>