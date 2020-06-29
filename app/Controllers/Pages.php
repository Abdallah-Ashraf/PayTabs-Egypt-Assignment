<?php namespace App\Controllers;

use App\Models\categoryModel;

class Pages extends BaseController
{
	public function index()
	{
            $model=new categoryModel();
            $data["mainCategories"]=$model->getCategories();
            echo view("layout/header");
            echo view("pages/categories",$data);
            echo view("layout/footer");
	}
        
        
        
        public function displayPage($page = "categories"){
            
            
            if(!is_file(APPPATH."/Views/pages/".$page.".php")){
                throw  new \CodeIgniter\Exceptions\PageNotFoundException($page);
            }
            
            echo view("layout/header");
            echo view("pages/".$page);
            echo view("layout/footer");
           
        }

        //--------------------------------------------------------------------

}
