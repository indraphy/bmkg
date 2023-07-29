<?php

namespace App\Controllers;
use App\Models\Model_kategori;

class Kategori extends BaseController
{
    private $Model_kategori;
    public function __construct()
    {
        $this->Model_kategori=new Model_kategori;
        helper('form');
    }
    public function index()
    {
        $data = array(
            'title' => 'Kategori',
            'kategori'=> $this->Model_kategori->all_data(),
            'isi' => 'v_kategori'
        );
        return view('layout/v_wrapper', $data);
        // return view('v_bridge', $data);
    }
    public function add()
    {
        $no_agenda = $this->request->getPost('no_agenda');
        $tingkat_keamanan = $this->request->getPost('tingkat_keamanan');
        $tanggal_penerimaan = $this->request->getPost('tanggal_penerimaan');
        $no_surat = $this->request->getPost('no_surat');
        $tanggal_surat = $this->request->getPost('tanggal_surat');
        $asal_surat = $this->request->getPost('asal_surat');
        $perihal = $this->request->getPost('perihal');
        $file = $this->request->getPost('file');

        $data = array(
            'no_agenda'=>$no_agenda,
            'tingkat_keamanan'=>$tingkat_keamanan,
            'tanggal_penerimaan'=>$tanggal_penerimaan,
            'no_surat'=>$no_surat,
            'tanggal_surat'=>$tanggal_surat,
            'asal_surat'=>$asal_surat,
            'perihal'=>$perihal,
            'file'=>$file,
        );
        $this->Model_kategori->add($data);
        session()->setFlashdata('pesan', 'Data berhasil ditambahkan');
        return redirect()->to(base_url('kategori'));
    }
    public function edit($id_suratmasuk)
    {
        $no_agenda = $this->request->getPost('no_agenda');
        $tingkat_keamanan = $this->request->getPost('tingkat_keamanan');
        $tanggal_penerimaan = $this->request->getPost('tanggal_penerimaan');
        $no_surat = $this->request->getPost('no_surat');
        $tanggal_surat = $this->request->getPost('tanggal_surat');
        $asal_surat = $this->request->getPost('asal_surat');
        $perihal = $this->request->getPost('perihal');
        $file = $this->request->getPost('file');

        $data = array(
            'id_suratmasuk'=>$id_suratmasuk,
            'no_agenda'=>$no_agenda,
            'tingkat_keamanan'=>$tingkat_keamanan,
            'tanggal_penerimaan'=>$tanggal_penerimaan,
            'no_surat'=>$no_surat,
            'tanggal_surat'=>$tanggal_surat,
            'asal_surat'=>$asal_surat,
            'perihal'=>$perihal,
            'file'=>$file,
        );
        $this->Model_kategori->edit($data);
        session()->setFlashdata('pesan', 'Data berhasil diupdate');
        return redirect()->to(base_url('kategori'));
    }
    public function delete($id_suratmasuk)
    {
        // $no_agenda = $this->request->getPost('no_agenda');
        // $tingkat_keamanan = $this->request->getPost('tingkat_keamanan');
        // $tanggal_penerimaan = $this->request->getPost('tanggal_penerimaan');
        // $no_surat = $this->request->getPost('no_surat');
        // $tanggal_surat = $this->request->getPost('tanggal_surat');
        // $asal_surat = $this->request->getPost('asal_surat');
        // $perihal = $this->request->getPost('perihal');
        // $file = $this->request->getPost('file');

        $data = array(
            'id_suratmasuk'=>$id_suratmasuk,
            // 'no_agenda'=>$no_agenda,
            // 'tingkat_keamanan'=>$tingkat_keamanan,
            // 'tanggal_penerimaan'=>$tanggal_penerimaan,
            // 'no_surat'=>$no_surat,
            // 'tanggal_surat'=>$tanggal_surat,
            // 'asal_surat'=>$asal_surat,
            // 'perihal'=>$perihal,
            // 'file'=>$file,
        );
        $this->Model_kategori->hapus($data);
        session()->setFlashdata('pesan', 'Data berhasil dihapus');
        return redirect()->to(base_url('kategori'));
    }
}
