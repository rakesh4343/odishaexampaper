<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class PaymentController extends BaseController
{
    public function index()
    {
        //
        $data['title'] = 'Payments / orders / Sold Products';
        echo view('admin/payments',$data);
    }
}
