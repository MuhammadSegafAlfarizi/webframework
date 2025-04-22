<?php

namespace App\Models;

use CodeIgniter\Model;

class ZonaPhoneModel extends Model
{
    protected $table = 'ega'; 

    public function getZonaPhone($id = false){
        if ($id == false){
            return $this->findAll();
        }
        return $this->where(['id' => $id])->first();
    }
}