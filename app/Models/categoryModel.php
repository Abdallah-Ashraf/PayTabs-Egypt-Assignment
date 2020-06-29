<?php namespace App\Models;

use CodeIgniter\Model;


class categoryModel extends Model{
    protected  $table="category";
    protected $allowedFields=['title','value','subCategoryId','level'];
    public function getCategories($level=null) {
        
        if(!$level){
            return $this->where(["level"=>0])->findAll();
        }
        return $this->asArray()->where(["level"=>$level])->findAll();
        
    }
    
    public function reset() {
        
        
        $this->asArray()->where(["level >"=>0])->delete();
        
    }
    
    
    
    
    
}
