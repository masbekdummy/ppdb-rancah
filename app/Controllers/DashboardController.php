<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AdminModel;
use App\Models\PpdbModel;
use CodeIgniter\HTTP\ResponseInterface;

class DashboardController extends BaseController
{
    protected $ppdbModel;

    public function __construct()
    {
        $this->ppdbModel = new PpdbModel();
    }
    public function ppdb()
    {
        $pendaftar = $this->ppdbModel->find(session()->get('id'));
        $percentComplete = $this->getPercentageComplete($pendaftar);
        return view('ppdb/dashboard', compact('pendaftar', 'percentComplete'));
    }

    public function admin()
    {
        $adminModel = new AdminModel();
        $admin = $adminModel->find(session('id'));

        $totalPendaftar = $this->ppdbModel->selectCount('ppdb_id')->countAllResults();
        $totalBelumLengkap = $this->ppdbModel->selectCount('ppdb_id')->where('status', 'Belum Lengkap')->countAllResults();
        $totalDiproses = $this->ppdbModel->selectCount('ppdb_id')->where('status', 'Diproses')->countAllResults();
        $totalLulus = $this->ppdbModel->selectCount('ppdb_id')->where('status', 'Lulus')->countAllResults();
        $totalGagal = $this->ppdbModel->selectCount('ppdb_id')->where('status', 'Gagal')->countAllResults();
        $totalDitolak = $this->ppdbModel->selectCount('ppdb_id')->where('status', 'Ditolak')->countAllResults();
        return view('admin/dashboard', compact('admin', 'totalPendaftar', 'totalBelumLengkap', 'totalDiproses', 'totalLulus', 'totalGagal', 'totalDitolak'));
    }

    public function getPercentageComplete($pendaftar)
    {
        $optionalField = $this->ppdbModel->optionalField;
        $percentComplete = 0;
        foreach($pendaftar as $key => $item){
            if($item && !in_array($key, $optionalField)){
                $percentComplete++;
            }
        }
        $percentComplete = floor(($percentComplete / (count($pendaftar) - count($optionalField))) * 100);
        return $percentComplete;
    }
}
