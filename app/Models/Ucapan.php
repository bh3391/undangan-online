<?php

namespace App\Models;

use CodeIgniter\Model;

class Ucapan extends Model
{
    protected $DBGroup              = 'default';
    protected $table                = 'ucapan';
    protected $primaryKey           = 'id';
    protected $useAutoIncrement     = true;
    protected $insertID             = 0;
    protected $returnType           = 'array';
    protected $useSoftDeletes       = false;
    protected $protectFields        = true;
    protected $allowedFields        = ['id','name','message','kehadiran'];

    // Dates
    protected $useTimestamps        = false;
    protected $dateFormat           = 'datetime';
    protected $createdField         = 'created_date';
    protected $updatedField         = 'updated_date';
    protected $deletedField         = 'deleted_at';

    // Validation
    protected $validationRules      = ['required'];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks       = true;
    protected $beforeInsert         = [];
    protected $afterInsert          = [];
    protected $beforeUpdate         = [];
    protected $afterUpdate          = [];
    protected $beforeFind           = [];
    protected $afterFind            = [];
    protected $beforeDelete         = [];
    protected $afterDelete          = [];


public function  view (){
   
    $query = $this->query('SELECT * FROM ucapan ORDER BY created_date DESC');
    $result = $query->getResultArray(); 
		return $result;
}
public function  tambah ($data){
    $query = $this->db->table($this->table)->insert($data);
		return $query;
}
public function hapus ($id){
	
		$query = $this->db->table($this->table)->delete(array('id' => $id));
		return $query;
	}
}