<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AdminModel;
use App\Models\PpdbModel;
use CodeIgniter\HTTP\ResponseInterface;
use Dompdf\Dompdf;

class ManajemenPpdbController extends BaseController
{
    protected $adminModel, $ppdbModel;
    public function __construct()
    {
        $this->ppdbModel = new PpdbModel();
        $this->adminModel = new AdminModel();
    }

    public function index()
    {
        $status = $this->request->getGet('filter') ?? '';
        $admin = $this->adminModel->find(session('id'));
        $ppdb = $this->ppdbModel->findAll();
        if($status){
            $ppdb = $this->ppdbModel->where('status', $status)->findAll();
        }
        return view('admin/manajemen-ppdb', compact('admin', 'ppdb', 'status'));
    }

    public function update($id)
    {
        $prevPpdb = $this->ppdbModel->find($id);
        $fileFotoSiswa = $prevPpdb['foto_siswa'];
        $fileNameIjazah = $prevPpdb['file_ijazah'];
        $fileNameRapot = $prevPpdb['file_rapot'];
        $nameKtpOrangTua = $prevPpdb['ktp_orang_tua'];
        $nameAktaKelahiran = $prevPpdb['akta_kelahiran'];
        $nameKartuKesejahtraan = $prevPpdb['kartu_kesejahtraan'];
        $nameSuratPernyataan = $prevPpdb['surat_pernyataan'];
        $nameSertifikatKejuaraan = $prevPpdb['sertifikat_kejuaraan'];

        $fotoSiswa = $this->request->getFile('foto_siswa');
        if($fotoSiswa->isValid()) {
            if($fileFotoSiswa) {
                unlink('foto-siswa/' . $fileFotoSiswa);
            }
            $fileFotoSiswa = $fotoSiswa->getRandomName();
            $fotoSiswa->move('foto-siswa/', $fileFotoSiswa);
        }

        $fileIjazah = $this->request->getFile('file_ijazah');
        if($fileIjazah->isValid()) {
            if($fileNameIjazah) {
                unlink('file-ijazah/' . $fileNameIjazah);
            }
            $fileNameIjazah = $fileIjazah->getRandomName();
            $fileIjazah->move('file-ijazah/', $fileNameIjazah);
        }

        $fileRapot = $this->request->getFile('file_rapot');
        if($fileRapot->isValid()) {
            if($fileNameRapot){
                unlink('file-rapot/' . $fileNameRapot);
            }
            $fileNameRapot = $fileRapot->getRandomName();
            $fileRapot->move('file-rapot/', $fileNameRapot);
        }

        $fileKtpOrangTua = $this->request->getFile('ktp_orang_tua');
        if($fileKtpOrangTua->isValid()) {
            if($nameKtpOrangTua) {
                unlink('ktp-orang-tua/' . $nameKtpOrangTua);
            }
            $nameKtpOrangTua = $fileKtpOrangTua->getRandomName();
            $fileKtpOrangTua->move('ktp-orang-tua/', $nameKtpOrangTua);
        }

        $fileAktaKelahiran = $this->request->getFile('akta_kelahiran');
        if($fileAktaKelahiran->isValid()) {
            if($nameAktaKelahiran) {
                unlink('akta-kelahiran/' . $nameAktaKelahiran);
            }
            $nameAktaKelahiran = $fileAktaKelahiran->getRandomName();
            $fileAktaKelahiran->move('akta-kelahiran/', $nameAktaKelahiran);
        }

        $fileKartuKesejahtraan = $this->request->getFile('kartu_kesejahtraan');
        if($fileKartuKesejahtraan->isValid()){
            if($nameKartuKesejahtraan) {
                unlink('kartu-kesejahtraan/' . $nameKartuKesejahtraan);
            }
            $nameKartuKesejahtraan = $fileKartuKesejahtraan->getRandomName();
            $fileKartuKesejahtraan->move('kartu-kesejahtraan/', $nameKartuKesejahtraan);
        }

        $fileSuratPernyataan = $this->request->getFile('surat_pernyataan');
        if($fileSuratPernyataan->isValid()){
            if($nameSuratPernyataan) {
                unlink('surat-pernyataan/' . $nameSuratPernyataan);
            }
            $nameSuratPernyataan = $fileSuratPernyataan->getRandomName();
            $fileSuratPernyataan->move('surat-pernyataan/', $nameSuratPernyataan);
        }

        $fileSertifikatKejuaraan = $this->request->getFile('sertifikat_kejuaraan');
        if($fileSertifikatKejuaraan->isValid()){
            if($nameSertifikatKejuaraan) {
                unlink('sertifikat-kejuaraan/' . $nameSertifikatKejuaraan);
            }
            $nameSertifikatKejuaraan = $fileSertifikatKejuaraan->getRandomName();
            $fileSertifikatKejuaraan->move('sertifikat-kejuaraan/', $nameSertifikatKejuaraan);
        }
        
        $this->ppdbModel->save([
            ...$this->request->getPost(),
            'ppdb_id' => $id,
            'foto_siswa' => $fileFotoSiswa,
            'file_ijazah' => $fileNameIjazah,
            'file_rapot' => $fileNameRapot,
            'ktp_orang_tua' => $nameKtpOrangTua,
            'akta_kelahiran' => $nameAktaKelahiran,
            'kartu_kesejahtraan' => $nameKartuKesejahtraan,
            'surat_pernyataan' => $nameSuratPernyataan,
            'sertifikat_kejuaraan' => $nameSertifikatKejuaraan
        ]);

        return redirect()->back()->with('success', 'Data PPDB berhasil di edit');
    }

    public function changePassword($id)
    {
        if(!$this->validate([
            'password' => 'required',
        ])){
            return redirect()->back()->withInput();
        }
        $this->ppdbModel->save([
            'ppdb_id' => $id,
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT)
        ]);

        return redirect()->back()->with('success', 'Password berhaisl di ubah');
    }

    public function delete($id)
    {
        $this->ppdbModel->delete($id);

        return redirect()->back()->with('success', 'Data berhasil di hapus');
    }

    public function report()
    {
        $status = $this->request->getGet('filter') ?? '';
        $ppdb = $this->ppdbModel->findAll();
        if($status){
            $ppdb = $this->ppdbModel->where('status', $status)->findAll();
        }
        $dompdf = new Dompdf();
        $dompdf->getOptions()->setChroot(FCPATH);

        $dompdf->loadHtml(view('admin/report-ppdb', compact('ppdb', 'status')));

        // (optional) setup the paper size and orientation
        $dompdf->setPaper('A4', 'potrait');

        // render html as PDF
        $dompdf->render();

        // output the generated pdf
        $dompdf->stream('Report PPDB.pdf', ['Attachment' => false]);
    }
}
