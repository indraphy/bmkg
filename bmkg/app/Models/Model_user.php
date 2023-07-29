<?php

namespace App\Models;

use CodeIgniter\Model;
use Config\Database;

class Model_user extends Model
{
    public function all_data()
    {
        return $this->db->table('tbl_user')
        ->orderBy('id_user', 'DESC')
        ->get()
        ->getResultArray();
    }
    public function add($data)
    {
        $this->db->table('tbl_user')->insert($data);
    }
    public function edit($data)
    {
        $this->db->table('tbl_user')
        ->where('id_user', $data['id_user'])
        ->update($data);
    }
    public function hapus($data)
    {
        $this->db->table('tbl_user')
        ->where('id_user', $data['id_user'])
        ->delete($data);
    }
}