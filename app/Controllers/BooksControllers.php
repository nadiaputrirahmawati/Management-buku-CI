<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Books as ModelsBooks;
use CodeIgniter\HTTP\ResponseInterface;

class BooksControllers extends BaseController
{
    public function index()
    {
        $modelbuku = new ModelsBooks();

        $data = [
            'title' => 'Management Buku',
            'page' => 'buku',
            'active_page' => 'buku',
            'buku' => $modelbuku->findAll()
        ];

        return view('Pages/Managementbuku', $data);
    }
    public function tambahData()
    {
        if (!$this->validate([
            'title' => 'required|max_length[100]',
            'deskripsi' => 'required|min_length[10]',
            'genre' => 'required|min_length[5]|max_length[20]',
            'author' => 'required|min_length[5]',
            'gambar' => 'uploaded[gambar]|mime_in[gambar,image/jpg,image/jpeg,image/png]',
            'tanggal' => 'required',
            'status' => 'required'
        ])) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $gambar = $this->request->getFile('gambar');
        if (!$gambar->isValid()) {
            return redirect()->back()->withInput()->with('error', 'File upload failed.');
        }

        $uploadDir = ROOTPATH . 'public/uploads';

        $namaFile = $gambar->getRandomName();
        if (!$gambar->move($uploadDir, $namaFile)) {
            return redirect()->back()->withInput()->with('error', 'File saving failed.');
        }

        $modelbuku = new ModelsBooks();
        $data = [
            'title' => $this->request->getPost('title'),
            'deskripsi' => $this->request->getPost('deskripsi'),
            'genre' => $this->request->getPost('genre'),
            'author' => $this->request->getPost('author'),
            'gambar' => $namaFile,
            'status' => $this->request->getPost('status'),
            'tanggal' => $this->request->getPost('tanggal')
        ];

        if (!$modelbuku->insert($data)) {
            return redirect()->back()->with('error', 'Failed to save data.');
        }

        return redirect()->to('/buku/data')->with('success', 'Data successfully added.');
    }

    public function deleteData($id_buku)
    {
        $model = new ModelsBooks();

        $data = $model->find($id_buku);

        if (!$data) {
            return redirect()->to('/buku/data')->with('error', 'Data tidak ditemukan.');
        }

        // Proses penghapusan data
        if ($model->delete($id_buku)) {
            return redirect()->to('/buku/data')->with('success', 'Data berhasil dihapus.');
        } else {
            return redirect()->to('/buku/data')->with('error', 'Gagal menghapus data.');
        }
    }

    public function detailData($id_buku)
    {
        $model = new ModelsBooks();
        $data = $model->find($id_buku);

        if ($data) {
            return $this->response->setJSON($data);
        } else {
            return $this->response->setJSON(['error' => 'Data tidak ditemukan']);
        }
    }

    public function updateData($id_buku)
    {

        if (!$this->validate([
            'title' => 'max_length[100]',
            'deskripsi' => 'min_length[10]',
            'author' => 'min_length[5]',
            'gambar' => 'permit_empty|uploaded[gambar]|mime_in[gambar,image/jpg,image/jpeg,image/png]',
        ])) {
            return redirect()->back()->withInput()->with('error', 'Data tidak lengkap');
        }

        $model = new ModelsBooks();
        $data = $model->where('id_buku', $id_buku)->first();

        if (!$data) {
            return redirect()->to('/buku/data')->with('error', 'Data buku tidak ditemukan.');
        }

        $namaFile = $data['gambar'];


        if ($this->request->getFile('gambar')->isValid()) {
            $gambar = $this->request->getFile('gambar');

            $namaFile = $gambar->getRandomName();
            $gambar->move(ROOTPATH . 'public/uploads', $namaFile);
        }

        $model->update($id_buku, [
            'title' => $this->request->getPost('title'),
            'deskripsi' => $this->request->getPost('deskripsi'),
            'author' => $this->request->getPost('author'),
            'genre' => $this->request->getPost('genre'),
            'gambar' => $namaFile,
            'status' => $this->request->getPost('status'),
            'tanggal' => $this->request->getPost('tanggal')
        ]);

        return redirect()->to('/buku/data')->with('success', 'Data buku berhasil diupdate.');
    }
}
