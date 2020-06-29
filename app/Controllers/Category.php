<?php namespace App\Controllers;

use App\Models\categoryModel;

class Category extends BaseController
{
	
        
        
    public function createCategory() {
        $model=new categoryModel();
        $level=(int)$this->request->getVar("level")+1;
        
        for($i=1;$i<3;$i++){
            if($level>1){
            $value="SUB ".$this->request->getVar("value")."-".$i;
            }else{
                $value="SUB ".$this->request->getVar("value").$i;  
            }
            $data=[
                "level"=> $level ,
                "subCategoryId"=> $this->request->getVar("subCategoryId".$this->request->getVar("level")),
                "title"=>$value
            ];
            $model->save($data);
        }
        $data["subCategories"]=$model->getCategories($level);
        $data["level"]=$level;
        echo view("pages/categorySelect",$data);
       
    }
    
    
    
    public function resetCategory() {
        $model=new categoryModel();
        $model->reset();
        $data["mainCategories"]=$model->getCategories();
        echo view("pages/categories",$data);
    }

       

}
