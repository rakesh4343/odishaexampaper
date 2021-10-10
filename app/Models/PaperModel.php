<?php

namespace App\Models;

use CodeIgniter\Model;

class PaperModel extends Model
{
    protected $DBGroup              = 'default';
    protected $table                = 'papers';
    protected $primaryKey           = 'id';
    protected $useAutoIncrement     = true;
    protected $insertID             = 0;
    protected $returnType           = 'array';
    protected $useSoftDeletes       = false;
    protected $protectFields        = true;
    protected $allowedFields        = ['id','paper_name','paper_slug','paper_description','paper_content','paper_category','paper_tags'];

    // Dates
    protected $useTimestamps        = false;
    protected $dateFormat           = 'datetime';
    protected $createdField         = 'created_at';
    protected $updatedField         = 'updated_at';
    protected $deletedField         = 'deleted_at';

    // Validation
    // protected $validationRules      = [];
    // protected $validationMessages   = [];
    // protected $skipValidation       = false;
    // protected $cleanValidationRules = true;

    // Callbacks
//     protected $allowCallbacks       = true;
//     protected $beforeInsert         = [];
//     protected $afterInsert          = [];
//     protected $beforeUpdate         = [];
//     protected $afterUpdate          = [];
//     protected $beforeFind           = [];
//     protected $afterFind            = [];
//     protected $beforeDelete         = [];
//     protected $afterDelete          = [];
// 
    public function getPapers($paper_slug = null){
        if(!$paper_slug){
            return $this->orderBy('papers.id', 'DESC')
                        ->findAll();  
        }
        return $this->asArray()
                     ->where(['paper_slug' => $paper_slug])
                    ->first();
                     
    }

}
