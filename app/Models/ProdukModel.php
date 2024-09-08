<?php

namespace App\Models;

use CodeIgniter\Model;

class ProdukModel extends Model
{
    protected $table = 'produk'; // Replace 'your_table_name' with your actual table name
    protected $primaryKey = 'id_produk'; // Replace 'id' with your actual primary key
    protected $allowedFields = ['nama_produk', 'gambar_produk', 'harga', 'stok', 'id_kategori']; // List of fields that can be inserted/updated
}
