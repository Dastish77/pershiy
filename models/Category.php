<?php

/**
 * Class Category
 */
class Category
{
    /**
     * @return array
     */
    public static function getCategoriesList()
    {
        $db = Db::getConnection();
        $categoryList = array();
        $result = $db->prepare('SELECT id, name FROM category ORDER BY sort_order ASC');
        $result->execute();

        $i = 0;
        while ($row = $result->fetch()) {
            $categoryList[$i]['id'] = $row['id'];
            $categoryList[$i]['name'] = $row['name'];
            $i++;
          
        }

        return $categoryList;
    }
}