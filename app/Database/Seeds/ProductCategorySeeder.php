<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ProductCategorySeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama_kategori' => 'Elektronik',
                'deskripsi'     => 'Produk seperti handphone, laptop, dan perangkat elektronik lainnya.',
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
            ],
            [
                'nama_kategori' => 'Pakaian',
                'deskripsi'     => 'Baju, celana, jaket, dan aksesoris fashion.',
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
            ],
            [
                'nama_kategori' => 'Makanan',
                'deskripsi'     => 'Makanan ringan, minuman, dan kebutuhan dapur.',
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
            ],
        ];

        $this->db->table('product_category')->insertBatch($data);
    }
}
