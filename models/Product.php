<?php

class Product
{
    const SHOW_BY_DEFAULT = 4;
    const STATUS_ENABLED = 1;
    const STATUS_DISABLED = 0;
    
    public static function getLatestProducts($count = self::SHOW_BY_DEFAULT)
    {
        $count = intval($count);
        $db = Db::getConnection();
        $productList = array();
        $result = $db->prepare('SELECT id, name, price, image, is_new FROM product WHERE status = :status ORDER BY id DESC LIMIT :limit');
        $result->bindValue(':status', self::STATUS_ENABLED, $db::PARAM_INT);
        $result->bindValue(':limit', $count, $db::PARAM_INT);
        $result->execute();
        
        $i = 0;
        while ($row = $result->fetch())
        {
            $productList[$i]['id'] = $row['id'];
            $productList[$i]['name'] = $row['name'];
            $productList[$i]['price'] = $row['price'];
            $productList[$i]['image'] = $row['image'];
            $productList[$i]['is_new'] = $row['is_new'];
            $i++;
        }
        return $productList;
    }


    public static function getProductsListByCategory($categoryId = false, $page = 1)
    {
        if ($categoryId) {
            $page = intval($page);
            $offset = ($page - 1) * self::SHOW_BY_DEFAULT;
         
            $db = Db::getConnection();
            $products = array();
            $result = $db->prepare('SELECT id, name, price, image, is_new FROM product WHERE status = :status AND category_id = :category_id ORDER BY id DESC LIMIT :limit OFFSET = :offset');
            $result->bindValue(':status', self::STATUS_ENABLED, $db::PARAM_INT);
            $result->bindValue(':category_id', $categoryId, $db::PARAM_INT);
            $result->bindValue(':limit', self::SHOW_BY_DEFAULT, $db::PARAM_INT);
            $result->bindValue(':offset', self::SHOW_BY_DEFAULT, $db::PARAM_INT);
            $result->execute();
        
            $i = 0;
            while ($row = $result->fetch())
            {
                $products[$i]['id'] = $row['id'];
                $products[$i]['name'] = $row['name'];
                $products[$i]['price'] = $row['price'];
                $products[$i]['image'] = $row['image'];
                $products[$i]['is_new'] = $row['is_new'];
                $i++;
            }
           return $products;
        }
    }
    public static function getProductById($id)
    {
        $id = intval($id);
        
        if ($id) {
            $db = Db::getConnection();
            
            $result = $db->query('SELECT * FROM product WHERE id=' . $id);
            $result->setFetchMode(PDO::FETCH_ASSOC);
            
            return $result->fetch();
        }
    }
}