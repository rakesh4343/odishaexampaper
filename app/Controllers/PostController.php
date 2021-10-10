<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class PostController extends BaseController
{
    public function creategk()
    {
        //Create General Knowledge
        $data['title'] = "General Knowledge";
        echo view('forms/creategk',$data);
    }
}
