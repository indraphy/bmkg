<?php

namespace App\Models;

use CodeIgniter\Model;
use Config\Database;

class Model_kategori extends Model
{
    public function all_data()
    {
        return $this->db->table('surat_masuk')
        ->orderBy('id_suratmasuk', 'DESC')
        ->get()
        ->getResultArray();
    }
    public function add($data)
    {
        $this->db->table('surat_masuk')->insert($data);
    }
    public function edit($data)
    {
        $this->db->table('surat_masuk')
        ->where('id_suratmasuk', $data['id_suratmasuk'])
        ->update($data);
    }
    public function hapus($data)
    {
        $this->db->table('surat_masuk')
        ->where('id_suratmasuk', $data['id_suratmasuk'])
        ->delete($data);
    }
}