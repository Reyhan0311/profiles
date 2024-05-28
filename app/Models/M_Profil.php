<?php

namespace App\Models;

use CodeIgniter\Model;

class M_Profil extends Model
{
    protected $table = 'reyhan';
    protected $allowedFields = ['nama', 'intro', 'email', 'nomor_hp'];

    // Get all column
    public function getAll()
    {
        return $this->findAll();
    }
}
?>