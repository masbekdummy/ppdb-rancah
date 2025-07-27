<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AdminModel;
use App\Models\PpdbModel;
use Exception;

class AuthController extends BaseController
{
    public function loginPpdb()
    {
        return view('ppdb/login');
    }

    public function storeLoginPpdb()
    {
        if(!$this->validate([
            'nisn' => 'required|numeric',
            'password' => 'required'
        ])){
            return redirect()->back()->withInput();
        }
        $ppdbModel = new PpdbModel();
        try{
            $peserta = $ppdbModel->where('nisn', $this->request->getPost('nisn'))->first();
            if($peserta === null){
                throw new Exception('Nisn tidak terdaftar');
            }
            if(!password_verify($this->request->getPost('password'), $peserta['password'])){
                throw new Exception('Password yang anda masukan salah');
            }
            $data = [
                'id' => $peserta['ppdb_id'],
                'level' => 'ppdb'
            ];

            session()->set($data);
            return redirect()->to('/ppdb-dashboard')->with('login-berhasil', 'Login Berhasil, Selamat Datang ' . $peserta['nama_lengkap']);
        }catch(Exception $e){
            session()->setFlashdata('gagal', $e->getMessage());
            return redirect()->back()->withInput();
        }
    }

    public function loginAdmin()
    {
        return view('admin/login');
    }

    public function storeLoginAdmin()
    {
        if(!$this->validate([
            'username' => 'required',
            'password' => 'required'
        ])){
            return redirect()->back()->withInput();
        }
        $adminModel = new AdminModel();
        try{
            $admin = $adminModel->where('username', $this->request->getPost('username'))->first();
            if($admin === null){
                throw new Exception('Username tidak terdaftar');
            }
            if(!password_verify($this->request->getPost('password'), $admin['password'])){
                throw new Exception('Password yang anda masukan salah');
            }
            $data = [
                'id' => $admin['admin_id'],
                'level' => 'admin'
            ];

            session()->set($data);
            return redirect()->to('/admin-dashboard')->with('login-berhasil', 'Login Berhasil, Selamat Datang ' . $admin['nama']);
        }catch(Exception $e){
            session()->setFlashdata('gagal', $e->getMessage());
            return redirect()->back()->withInput();
        }
    }

    public function logout()
    {
        $level = session()->get('level');
        session()->remove(['id', 'level']);
        if($level === 'ppdb'){
            return redirect()->to('/login');
        }
        return redirect()->to('/admin/login');
    }
}
