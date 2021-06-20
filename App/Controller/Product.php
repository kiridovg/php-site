<?php

namespace App\Controller;

use App\Mapper\ProductMapper;
use Framework\Core\Controller;
use Framework\Core\View;

class Product extends Controller
{
    public $product;

    public View $view;

    public function getProductID()
    {
        return $this->view->render('../App/View/Templates/productid.php', null, 'layout.php');
    }

    public function getProductList()
    {
        return $this->view->render('../App/View/Templates/productlist.php', null, 'layout.php');
    }

    public function getProductIdAPI($id)
    {
        $this->product = new ProductMapper();
        $params = $this->product->getProductID($id);
        print_r(json_encode($params));
    }

    public function getProductListAPI()
    {
        $this->product = new ProductMapper();
        $params = $this->product->getAllProduct();
        print_r(json_encode($params));
    }
}
