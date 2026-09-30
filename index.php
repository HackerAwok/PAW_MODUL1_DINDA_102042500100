<?php
// Data produk disimpan dalam array PHP
$produk = [
    [
        "nama" => "Minyak Kapak",
        "kategori" => "Perawatan Tubuh",
        "harga" => 25000,
        "stok" => 15
    ],
    [
        "nama" => "Minyak Urut Herbal",
        "kategori" => "Perawatan Tubuh",
        "harga" => 35000,
        "stok" => 10
    ],
    [
        "nama" => "Alat Pijat Leher",
        "kategori" => "Alat Pijat",
        "harga" => 250000,
        "stok" => 0
    ],
    [
        "nama" => "Kursi Pijat Elektrik",
        "kategori" => "Alat Pijat",
        "harga" => 5000000,
        "stok" => 8
    ],
    [
        "nama" => "Earseeds",
        "kategori" => "Alat Pijat",
        "harga" => 20000,
        "stok" => 35
    ],
    [
        "nama" => "Minyak Kayu Putih",
        "kategori" => "Perawatan Tubuh",
        "harga" => 21000,
        "stok" => 0
    ]
];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rumah Sehat</title>

    <!-- Hubungkan CSS -->
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <!-- NAVBAR -->
    <header>
        <nav class="navbar">
            <div class="logo">Rumah Sehat</div>

            <div class="menu">
                <a href="#home">Home</a>
                <a href="#produk">Produk</a>
                <a href="#kontak">Kontak</a>
            </div>
        </nav>
    </header>


    <!-- HERO -->
    <section class="hero" id="home">
        <div class="hero-content">
            <p class="subtitle">WELCOME TO</p>
            <h1>Rumah Sehat</h1>

            <p>
                Temukan berbagai produk kesehatan dengan harga terbaik.
            </p>

            <a href="#produk" class="hero-button">
                Lihat Produk
            </a>
        </div>
    </section>


    <!-- INFORMASI JUMLAH PRODUK -->
    <section class="info" id="produk">
        <h2>Katalog Produk</h2>

        <p>
            Kami menyediakan
            <strong><?php echo count($produk); ?></strong>
            produk kesehatan untuk para kaum jompo.
        </p>
    </section>


    <!-- KATALOG PRODUK -->
    <section class="catalog">

        <?php foreach ($produk as $item): ?>

            <div class="card">

                <div class="card-content">

                    <span class="category">
                        <?php echo $item["kategori"]; ?>
                    </span>

                    <h3>
                        <?php echo $item["nama"]; ?>
                    </h3>

                    <p class="price">
                        Rp <?php echo number_format($item["harga"], 0, ',', '.'); ?>
                    </p>

                    <p class="stock">
                        Stok:
                        <strong><?php echo $item["stok"]; ?></strong>
                    </p>


                    <!-- Percabangan PHP untuk status stok -->
                    <?php if ($item["stok"] > 0): ?>

                        <p class="available">
                            ● Tersedia
                        </p>

                        <button class="buy-button">
                            Beli Sekarang
                        </button>

                    <?php else: ?>

                        <p class="sold-out">
                            ● Stok Habis
                        </p>

                        <button class="disabled-button" disabled>
                            Stok Habis
                        </button>

                    <?php endif; ?>

                </div>

            </div>

        <?php endforeach; ?>

    </section>


    <!-- FOOTER -->
    <footer id="kontak">
        <h3>Rumah Sehat</h3>

        <p>
            Toko produk kesehatan untuk para kaum jompo.
        </p>

        <p>
            © 2026 Rumah Sehat. All Rights Reserved.
        </p>
    </footer>

</body>
</html>