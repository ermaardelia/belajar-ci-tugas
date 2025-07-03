<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DiskonSeeder extends Seeder
{
    public function run()
    {
        $data = [];
        $startDate = new \DateTime(); // mulai dari hari ini

        for ($i = 0; $i < 10; $i++) {
            $tanggal = (clone $startDate)->modify("+{$i} days")->format('Y-m-d');

            $data[] = [
                'tanggal'     => $tanggal,
                'nominal'     => rand(100000, 300000),
                'created_at'  => date("Y-m-d H:i:s"),
                'updated_at'  => date("Y-m-d H:i:s"),
            ];
        }

        // Insert semua data ke tabel diskon
        foreach ($data as $item) {
            $this->db->table('diskon')->insert($item);
        }
    }
}
