<?php

namespace App\Models;

use CodeIgniter\Model;

class LoginAsistenModel extends Model
{
    protected $table = 'login';
    protected $allowedFields = ['Username', 'Password'];

    public function getLogin()
    {
        return $this->findAll();
    }

    public function simpan($record)
    {
        $this->save([
            'Username' => $record['usr'],
            'Password' => $record['pwd'],
        ]);
    }

    public function ambil($usr)
    {
        return $this->where(['Username' => $usr])->first();
    }
}