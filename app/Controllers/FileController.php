<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class FileController extends BaseController
{
    public function index()
    {
        //file upload
        $data['title'] = "Upload Your Exam Paper";
        echo view('pages/upload',$data);
    }
}
