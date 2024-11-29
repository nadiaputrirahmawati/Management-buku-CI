<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Books;
use CodeIgniter\HTTP\ResponseInterface;

class DataController extends BaseController
{
    public function index()
    {
        $model = new Books();

        $data = [
            'title' => 'Data',
            'page' => 'Data Books',
            'active_page' => 'bukuall'
        ];

        $data['buku'] = $model ->where('status', 'publish')->find();

        return view('Pages/Data', $data);
    }

    public function detail($id_buku) {

        $model = new Books();

        $data = [
            'title' => 'Detail Data',
            'page' => 'Data Books',
            'active_page' => 'bukuall'
        ];

        $data['detail'] = $model->find($id_buku);

        return view('Pages/Detail', $data);
    }
}
