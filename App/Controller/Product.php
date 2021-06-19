<?php

namespace App\Controller;

use App\Mapper\ProductMapper;
use Framework\Core\Controller;
use Framework\Core\View;

class Product extends Controller
{
    public $product;

    public View $view;

    public function startAPI()
    {
        return $this->view->render('../App/View/Templates/productlist.php', null, 'layout.php');
    }
    public function getProductList()
    {
        $this->product = new ProductMapper();
        $params = $this->product->getAllProduct();
        return $this->view->render('../App/View/Templates/productlist.php', $params, 'layout.php');
    }

    public function getProductListAPI()
    {
        $this->product = new ProductMapper();
        $params = $this->product->getAllProduct();
        print_r(json_encode($params));
    }
}
