<?php

namespace App\Database\Seeds;

class ProdukSeeder extends \CodeIgniter\Database\Seeder
{
    public function run()
    {
        $data = [
            [
                'nama_produk' => 'baju',
                'deskripsi'    => 'baju panjang'
            ],
            [
                'nama_produk' => 'celana',
                'deskripsi'    => 'celana panjang'
            ],

        ];

        // Simple Queries
        // $this->db->query("INSERT INTO users (username, email) VALUES(:username:, :e_mail:)",
        //        $data
        //);

        // Using Query Builder
        $this->db->table('produk')->insertBatch($data);
    }
}