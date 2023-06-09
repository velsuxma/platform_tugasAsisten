<?php

namespace App\Models;

use CodeIgniter\Model;

class LoginAsistenModel extends Model
{
    protected $table = 'login';
    protected $allowedFields = ['username', 'password'];

    public function getLogin()
    {
        return $this->findAll();
    }

    public function simpan($record)
    {
        $this->save([
            'username' => $record['usr'],
            'password' => $record['pwd'],
        ]);
    }

    public function ambil($usr)
    {
        return $this->where(['username' => $usr])->first();
    }
}