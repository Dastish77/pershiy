<?php

return array(
    'product/([0-9]+)' => 'product/view/$1',
    
    'catalog' => 'catalog/index',
    
    'category/([0-9]+)/page-([0-9]+)' => 'catalog/category/$1/$2',
    'category/([0-9]+)' => 'catalog/category/$1',

    'cart/add/([0-9]+)' => 'cart/add/$1',
    
    'cart/addAjax/([0-9]+)' => 'cart/addAjax/$1',
    'cart' => 'cart/index',
    
    'user/login' => 'user/login',
    'user/logout' => 'user/logout',
    'user' => 'user/register',
    
    'cabinet/edit' => 'cabinet/edit',
    'cabinet' => 'cabinet/index',
    
    '' => 'site/index',
);
