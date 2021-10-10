<?php namespace App\Controllers;


use App\Models\PaperModel;


class Pages extends BaseController
{

 
       public function view($page = 'home'){
 
       if ( ! is_file(APPPATH.'/Views/pages/'.$page.'.php')){
 
           // Whoops, we don't have a page for that!
           
	 throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
  
      }
        

      
	 $data['title'] = ucfirst($page);
        
	echo view('pages/'.$page, $data);
       
    }
}