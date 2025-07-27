<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AdminModel;
use App\Models\PengumumanModel;
use App\Models\PpdbModel;
use CodeIgniter\HTTP\ResponseInterface;

class PengumumanController extends BaseController
{
    protected $pengumumanModel;
    public function __construct()
    {
        $this->pengumumanModel = new PengumumanModel();
    }
    public function index()
    {
        $adminModel = new AdminModel();
        $admin = $adminModel->find(session('id'));
        $pengumuman = $this->pengumumanModel->findAll();
        return view('admin/pengumuman/index', compact('pengumuman', 'admin'));
    }

    public function store()
    {
        $this->pengumumanModel->save($this->request->getPost());

        return redirect()->back()->with('success', 'Pengumuman berhasil di tambahkan');
    }

    public function update($id)
    {
        $this->pengumumanModel->save([
            'pengumuman_id' => $id,
            ...$this->request->getPost(),
        ]);
        return redirect()->back()->with('success', 'Pengumuman berhasil di edit');
    }

    public function delete($id)
    {
        $this->pengumumanModel->delete($id);
        return redirect()->back()->with('success', 'Pengumuman berhasil di hapus');
    }

    public function ppdb()
    {
        $ppdbModel = new PpdbModel();
        $pendaftar = $ppdbModel->find(session('id'));
        $pengumuman = $this->pengumumanModel->orderBy('created_at', 'DESC')->findAll();
        return view('ppdb/pengumuman', compact('pengumuman', 'pendaftar'));
    }
}
