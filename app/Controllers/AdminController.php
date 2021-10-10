<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class AdminController extends BaseController
{
    public function index()
    {
        $data['title'] = "Administration Area";
        echo view('admin/login');
    }

     public function adminarea()
        {
        	$data['title'] = "Dashboard / Administration Area";
        	echo view('admin/dashboard',$data);
        }
        

        //Manage Users
        public function manageusers()
        {
        	$data['title'] = "Manage Users";
        	echo view('admin/manageusers',$data);
        }

        //Manage admins
        public function manageadmins()
        {
        	$data['title'] = "Manage Admins";
        	echo view('admin/manageAdmins',$data);
        }
}
