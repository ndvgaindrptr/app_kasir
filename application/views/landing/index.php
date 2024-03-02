<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <style>
        /* Style untuk tampilan yang lebih menarik */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 10px 0;
            text-align: center;
        }

        nav {
            background-color: #444;
            text-align: center;
            padding: 10px 0;
        }

        nav a {
            color: #fff;
            text-decoration: none;
            padding: 0 20px;
        }

        section {
            padding: 20px;
            display: flex;
            flex-direction: row;
            /* Mengatur arah menjadi horizontal */
            align-items: center;
            /* Pusatkan vertikal */
        }

        .section-content {
            flex: 1;
            /* Biarkan konten ini memperluas sesuai kebutuhan */
        }

        .section-image {
            flex: 1;
            /* Biarkan gambar ini memperluas sesuai kebutuhan */
        }

        .section-image img {
            max-width: 100%;
            /* Pastikan gambar tidak melebihi lebar parent */
            height: auto;
            /* Biarkan tinggi gambar menyesuaikan proporsi */
        }
    </style>
</head>

<body>

    <header>
        <h1>Halaman Landing Page</h1>
    </header>

    <nav>
        <a href="<?php echo base_url('auth/index'); ?>">Login</a>
    </nav>

    <section>

        <div class="section-content">
            <h2>Selamat datang di Aplikasi Kasir</h2>
            <p>Ini adalah halaman landing page untuk aplikasi kasir kami.</p>
            <!-- Konten lainnya seperti gambar atau deskripsi bisa ditambahkan di sini -->
        </div>

        <div class="section-image">
            <img src="<?= base_url('assets/img/kasir3.png') ?>" alt="" class="card-img">
        </div>

    </section>

</body>

</html>