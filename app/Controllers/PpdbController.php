<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PpdbModel;
use Dompdf\Dompdf;
use Dompdf\Options;

class PpdbController extends BaseController
{
    protected $ppdbModel;
    public function __construct()
    {
        $this->ppdbModel = new PpdbModel();
    }
    public function index()
    {
        return view('ppdb/daftar');
    }

    public function create()
    {
        if(!$this->validate([
            'nisn' => [
                'rules' => 'required|numeric|is_unique[ppdb.nisn]',
                'errors' => [
                    'is_unique' => 'Nisn sudah terdaftar'
                ]
            ],
            'nama_lengkap' => 'required',
            'no_telp' => 'required|numeric',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'jalur_pendaftaran' => 'required',
        ])){
            return redirect()->back()->withInput();
        }

        $this->ppdbModel->save([
            ...$this->request->getPost(),
            'password' => password_hash($this->request->getPost('nisn'), PASSWORD_DEFAULT),
            'status' => 'Belum Lengkap',
        ]);

        session()->setFlashdata('berhasil', 'Daftar berhasil, silakan masukan nisn untuk mengisi password');
        return redirect('login');
    }

    public function formulir()
    {
        $pendaftar = $this->ppdbModel->find(session()->get('id'));
        $percentComplete = $this->getPercentageComplete($pendaftar);
        return view('ppdb/formulir', compact('pendaftar', 'percentComplete'));
    }

    public function storeFormulir()
    {
        $prevPpdb = $this->ppdbModel->find(session()->get('id'));
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
            'ppdb_id' => session()->get('id'),
            'foto_siswa' => $fileFotoSiswa,
            'file_ijazah' => $fileNameIjazah,
            'file_rapot' => $fileNameRapot,
            'ktp_orang_tua' => $nameKtpOrangTua,
            'akta_kelahiran' => $nameAktaKelahiran,
            'kartu_kesejahtraan' => $nameKartuKesejahtraan,
            'surat_pernyataan' => $nameSuratPernyataan,
            'sertifikat_kejuaraan' => $nameSertifikatKejuaraan
        ]);
        
        $pendaftar = $this->ppdbModel->find(session()->get('id'));
        $percentComplete = $this->getPercentageComplete($pendaftar);
        $status = 'Belum Lengkap';
        if($percentComplete == 100){
            $status = 'Diproses';
        }
        $this->ppdbModel->save([
            'ppdb_id' => session()->get('id'),
            'status' => $status
        ]);

        return redirect()->to('/formulir')->with('success', 'Data berhasil di simpan');
    }

    public function changePassword()
    {
        $pendaftar = $this->ppdbModel->find(session()->get('id'));
        return view('ppdb/change-password', compact('pendaftar'));
    }

    public function storeChangePassword()
    {
        if(!$this->validate([
            'password' => 'required',
            'konfirmasi_password' => [
                'rules' => 'required|matches[password]',
                'errors' => [
                    'matches' => 'Konfirmasi Password tidak sama dengan password'
                ]
            ],
        ])){
            return redirect()->back()->withInput();
        }

        $this->ppdbModel->save([
            'ppdb_id' => session()->get('id'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT)
        ]);

        return redirect()->to('change-password')->with('success', 'Password berhasil di ubah');
    }

    public function cetakFormulir()
    {
        $dompdf = new Dompdf();
        $dompdf->getOptions()->setChroot(FCPATH);
        $pendaftar = $this->ppdbModel->find(session('id'));

        $dompdf->loadHtml(view('ppdb/cetak', compact('pendaftar')));

        // (optional) setup the paper size and orientation
        $dompdf->setPaper('A4', 'potrait');

        // render html as PDF
        $dompdf->render();

        // output the generated pdf
        $dompdf->stream('Formulir Pendaftaran.pdf', ['Attachment' => true]);
    }

    public function downloadSuratPernyataan()
    {
        return $this->response->download('surat pernyataan.pdf', null);
    }

    // buat function untuk mendapatkan presentase kelengkapan data
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
