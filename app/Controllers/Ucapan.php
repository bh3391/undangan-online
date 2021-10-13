<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Ucapan as UcapanModels;

class Ucapan extends BaseController
{
    public function index()
    {
        $model = new UcapanModels() ;
        $ucapan =$model->view();
        $data['ucapan'] = $ucapan; 
        return view('comment',$data);

    }
    public function hapus($id){
        
		$model = new UcapanModels(); 
		$model->hapus($id); 
        return redirect()->to('/ucapan');
    }
}
