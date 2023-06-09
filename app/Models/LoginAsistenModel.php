<?php

namespace App\Models;

use CodeIgniter\Model;

class LoginAsistenModel extends Model
{
    protected $table1 = 'login';

    protected $allowedFields = ['username', 'password'];

    public function getLoginAsisten()
    {
        return $this->findAll();
    }

    public function simpan($record)
    {
        $this->save([
            'username' => $record['username'],
            'password' => $record['password'],
            #halo
        ]);
    }

    public function ambil($usr)
    {
        return $this->where(['username' => $usr])->first();
    }

    public function ambilPwd($pwd)
    {
        return $this->where(['password' => $pwd])->first();
    }
}