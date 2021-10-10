<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class AnalyticsController extends BaseController
{
	public function index(){
		$data['title'] = "Google Analytics Report";
		return view('admin/analytics',$data);
	}
}