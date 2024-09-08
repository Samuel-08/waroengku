<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produk</title>
    <link rel="stylesheet" href="<?= base_url('../assets/css/style.css') ?>">
</head>

<body>
    <h1>Produk</h1>

    <!-- Search Form -->
    <div class="search-container">
        <form action="<?= base_url('produk/cari') ?>" method="GET">
            <input type="text" name="search" placeholder="Cari Produk..." required>
            <button type="submit">Cari</button>
        </form>
    </div>

    <!-- Product Table -->
    <table>
        <caption>Daftar Produk</caption>
        <thead>
            <tr>
                <th>Nama Produk</th>
                <th>Harga</th>
                <th>Gambar</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($produk as $dp) : ?>
                <tr>
                    <td><?= $dp['nama_produk'] ?></td>
                    <td><b>Rp </b><?= $dp['harga'] ?></td>
                    <td><img src="<?= base_url("/assets/image/{$dp['gambar_produk']}") ?>" class="image-product" alt="<?= $dp['gambar_produk'] ?>"></td>
                    <td class="aksi">
                        <!-- Action Buttons -->
                        <a href="<?= base_url("produk/detail/{$dp['id_produk']}") ?>" class="btn detail">Lihat Detail</a>
                        <a href="<?= base_url("produk/edit/{$dp['id_produk']}") ?>" class="btn edit">Edit</a>
                        <form action="<?= base_url("produk/hapus/{$dp['id_produk']}") ?>" method="POST" class="inline-form">
                            <button type="submit" class="btn delete" onclick="return confirm('Yakin ingin menghapus produk ini?');">Hapus</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <!-- Pagination -->
    <div class="pagination">
        <a href="#">&laquo; Previous</a>
        <a href="#">1</a>
        <a href="#">2</a>
        <a href="#">3</a>
        <a href="#">Next &raquo;</a>
    </div>
</body>

</html>