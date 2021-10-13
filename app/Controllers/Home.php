<?php

namespace App\Controllers;

use App\Models\Ucapan;

class Home extends BaseController
{
    public function index()
    {
        return view('main');
    }
    public function tambah()
    {
        $session = session();
        $model = new Ucapan();
        
        $data = array(

            'name' => $this->request->getPost('name'),
            'message' => $this->request->getPost('message'),
            'kehadiran'  => $this->request->getPost('kehadiran'),
        );
        
        $model->tambah($data);
        if ($data == !null) {
            $session->setFlashdata('msg', 'Ucapan Anda Berhasil Terkirim');
            return redirect()->to('/#bukutamu');
        } else {
            $session->setFlashdata('err', '');
            
        }
    }
    

}
