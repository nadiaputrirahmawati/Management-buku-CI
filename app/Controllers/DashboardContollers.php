<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Books;
use CodeIgniter\HTTP\ResponseInterface;

class DashboardContollers extends BaseController
{
    public function index()
    {
        $Buku = new Books();

        $data = [
            'title' => 'Halaman Dashboard Buku',
            'page' => 'dashboard',
            'active_page' => 'dashboard'
        ];

        $data['databuku'] = $Buku->findAll(5, 0);
        $data['data'] = $Buku->findAll();
        $data['bukutoday'] = $Buku->orderBy('created_at', 'DESC')->first();
        $today = date('Y-m-d');
        $data['bukutodaycount'] = $Buku->where('DATE(created_at)', $today)
            ->orderBy('created_at', 'DESC')
            ->findAll();
        return view('Pages/Dashboard', $data);
    }
}
