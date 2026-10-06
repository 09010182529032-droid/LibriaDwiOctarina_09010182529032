<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Dashboard - Perpustakaan UTS</title>

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
            margin: 40px auto;
        }

        .welcome {
            background: white;
            padding: 30px;
            border-radius: 12px;
            margin-bottom: 25px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.06);
        }

        .welcome h1 {
            color: #1f4e79;
            margin-bottom: 8px;
        }

        .welcome p {
            color: #777;
        }

        .cards {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }

        .card {
            background: white;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.06);
        }

        .card-icon {
            font-size: 35px;
            margin-bottom: 15px;
        }

        .card h3 {
            color: #1f4e79;
            margin-bottom: 8px;
        }

        .card p {
            color: #777;
            font-size: 14px;
            margin-bottom: 18px;
        }

        .btn {
            display: inline-block;
            background: #1f4e79;
            color: white;
            padding: 10px 16px;
            border-radius: 7px;
            text-decoration: none;
            font-size: 14px;
        }

        .btn:hover {
            background: #163a5c;
        }

        @media (max-width: 768px) {
            .cards {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body>

    <div class="navbar">
        <h2>📚 Perpustakaan UTS</h2>

        <a href="{{ route('login') }}">
            Keluar
        </a>
    </div>

    <div class="container">

        <div class="welcome">
            <h1>Selamat Datang 👋</h1>

            <p>
                Selamat datang di Sistem Manajemen Perpustakaan.
                Silakan pilih menu yang ingin digunakan.
            </p>
        </div>

        <div class="cards">

            <div class="card">
                <div class="card-icon">📖</div>

                <h3>Daftar Buku</h3>

                <p>
                    Melihat dan mengelola seluruh data buku yang tersedia
                    di perpustakaan.
                </p>

                <a href="{{ route('books.index') }}" class="btn">
                    Lihat Buku
                </a>
            </div>

            <div class="card">
                <div class="card-icon">➕</div>

                <h3>Tambah Buku</h3>

                <p>
                    Menambahkan data buku baru ke dalam sistem
                    perpustakaan.
                </p>

                <a href="{{ route('books.create') }}" class="btn">
                    Tambah Buku
                </a>
            </div>

            <div class="card">
                <div class="card-icon">📚</div>

                <h3>Kelola Buku</h3>

                <p>
                    Mengubah, melihat detail, atau menghapus data buku
                    yang sudah tersimpan.
                </p>

                <a href="{{ route('books.index') }}" class="btn">
                    Kelola Buku
                </a>
            </div>

        </div>

    </div>

</body>
</html>