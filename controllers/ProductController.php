<?php


class ProductController
{
    public function actionView($productId)
    {
        $categories = array();
        $categories = Category::getCategoriesList();
        
        $id3 = array();       
        $id3 = Product::getProductByIdCategory($id); 
        
        $product = Product::getProductById($productId);        
                              
        require_once(ROOT . '/views/product/view.php');
        
        return true;
    }
}
