<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PaperModel;

class PaperController extends BaseController
{
    public function index(){

      
        //$session = session();
        helper(['text','url']);
       
         $model = new PaperModel();
         
        $data['papers'] = $model->getPapers();
        //$data['sort'] = $model->orderBy('posts.id', 'DESC');
       
        // $data = [
        //     'paper_posts' =>$model->paginate(10),
        //     'pager' => $model->pager,
        // ];
       
        echo view('pages/home',$data);
       
       
      }
   
// SINGLE VIEW FOR *********************************************************************************************
        public function view($paper_slug = null)
        {
            helper(['form','text']);
            $model = new PaperModel();
    
            $data['papers'] = $model->getPapers($paper_slug);
        
        if (empty($data['papers']))
        {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Cannot find the post: '. $paper_slug);
        }
    
        
        $data['title'] = $data['papers']['paper_name'];
        $data['description'] = $data['papers']['paper_description'];
        $data['slug'] = $data['papers']['paper_slug'];
      
        
        
        echo view('pages/singleview', $data);
        
         }

//  CREATE POSTS ***************************************************************************************************
 //    public function create(){
 //        $session = session();

	// 	if($session->has('user')){
	// 		echo view('blog/create');
	// 	}else{
	// 		return redirect()->to('login');
	// 	}
 //    $model = new BlogModel();

 //    if ($this->request->getMethod() === 'post' && $this->validate([
 //            'title' => 'required|min_length[3]|max_length[120]',
 //            'body'  => 'required',
 //            'description' => 'required|max_length[255]',
 //            'tags' => 'required'
 //        ]))
 //    {
 //        $model->save([
 //            'title' => $this->request->getPost('title'),
 //            'slug'  => url_title($this->request->getPost('title'), '-', TRUE),
 //            'description' => $this->request->getPost('description'),
 //            'body'  => $this->request->getPost('body'),
 //            'tags' => $this->request->getPost('tags')
           
 //        ]);
 //    return redirect()->to('dashboard');
       

 //    }
 //    }



 //    //EDIT POST//*********************************************************************************************** */
 //      public function edit($id)
 //    {
 //        $model = new BlogModel();
 //        $data['row_data'] = $model->where('id',$id)
 //                                    ->first();
        
      
 //        return view('blog/editpost', $data);

      
 //    }

 //    // update    ###################################################
 //      public function updatepost(){
 //        helper(['form', 'url']);
 //        $model = new BlogModel();
	// 	$id = $this->request->getVar('id');
 //        $data = [
 //            'title' => $this->request->getVar('title'),
 //            'body' => $this->request->getVar('body'),
 //            'description' => $this->request->getVar('description'),
 //            'tags' => $this->request->getVar('tags')
 //        ];
		
 //        $model->update($id,$data);
       
 //        $session = session();
 //        $session->setFlashdata('update', 'Post has been Updated');
		
	// 		return redirect()->to( base_url() );
	// 	}
	
 //    // Delete Post #############################################

 //    public function delete($id){

 //        $model = new BlogModel();
 //        $model->where('id', $id)->delete();
       
 //        $session = session();
 //        $session->setFlashdata('delete', 'Post has been deleted');

 //        return redirect()->to('/');
			
	// }
         


}
