<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class CategoryController extends BaseController
{
     public function getCategory()
    {
        $model = new CategoryModel();

        $data['categories'] = $model->getCategory();

        
    }
}
