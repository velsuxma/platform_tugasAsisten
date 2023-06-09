<?php

namespace App\Controllers;

use App\Models\AsistenModel;

class AsistenController extends BaseController
{
    public function index()
    {
        return view('/asisten/loginAsisten');
    }
    public function tampilData()
    {
        $model = model(AsistenModel::class);

        $data = ['asisten' => $model->getAsisten(), 'title' => 'Data Asisten'];
        return view('/asisten/AsistenView', $data);
    }

    public function login()
    {
        return view('/asisten/loginAsisten');
    }
    public function simpan()
    {
        helper('form');

        if (!$this->request->is('post')) {
            return view('/asisten/simpan');
        }

        $post = $this->request->getPost(['nim', 'nama', 'praktikum', 'ipk']);

        $model = model(AsistenModel::class);

        $model->simpan($post);

        return view("/asisten/succes");
    }

    public function hapus()
    {
        $db = \config\Database::connect();
        $builder = $db->table('asisten');
        helper('form');
        if (!$this->request->is('post')) {
            return view('/asisten/hapus');
        }
        $nim = $this->request->getPost('nim');
        $result = $builder->getWhere(['nim' => $nim])->getResult();
        if (count($result) == 0) {
            return "NIM tidak ditemukan!";
        }
        $builder->where('nim', $nim);
        $builder->delete();
        return view('/asisten/succesDel');
    }

    public function update()
    {
        $db = \config\Database::connect();
        $builder = $db->table('asisten');
        helper('form');
        if (!$this->request->is('post')) {
            return view('/asisten/update');
        }
        $data = [
            'nama' => [$this->request->getPost('nama')],
            'praktikum' => [$this->request->getPost('praktikum')],
            'ipk' => [$this->request->getPost('ipk')]
        ];
        $builder->where('nim', $this->request->getPost('nim'));
        $builder->update($data);
        return view('/asisten/succesUpdate');
    }

    public function search()
    {
        if (!$this->request->is('post')) {
            return view('/asisten/search');
        }

        $nim = $this->request->getPost(['key']);

        $model = model(AsistenModel::class);
        $asisten = $model->ambil($nim['key']);

        $data = ['hasil' => $asisten];
        return view('/asisten/search', $data);
    }
    public function check()
    {
        $post = $this->request->getPost(['usr', 'pwd']);
        $model = model(LoginAsistenModel::class);
        $asisten = $model->ambil($post['usr']);

        if ($asisten == null) {
            return view('/asisten/loginAsisten');
        }

        if ($post['pwd'] == $asisten['password']) {
            $session = session();
            $session->set('pengguna', $post['usr']);
            $view = new AsistenController;
            return $view->tampilData();
        } else {
            return view('/asisten/loginAsisten');
        }
    }

    public function logout()
    {
        $session = session();
        $session->remove('pengguna');
        return view('/asisten/loginAsisten');
    }
}