<?php

include_once ROOT.'/models/Category.php'; 
include_once ROOT.'/models/Product.php'; 

class ProductController
{
    public function actionView($productId)
    {
        $categories = array();
        $categories = Category::getCategoriesList();
        
        $id2 = array();       
        $id2 = Product::getProductByIdCategory($id2); 
        
        $product = Product::getProductById($productId);        
                              
        require_once(ROOT . '/views/product/view.php');
        
        return true;
    }
}
