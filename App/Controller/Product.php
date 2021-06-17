<?php
namespace App\Controller;

use App\Mapper\ProductMapper;
use Framework\Core\Controller;
use Framework\Core\View;

class Product extends Controller
{
    public $product;

    public View $view;


    public function getProductList()
    {
        $this->product = new ProductMapper();
        $params = $this->product->getAllProduct();
        return $this->view->render('../App/View/Templates/productlist.php', $params, 'layout.php');
    }

    public function getProductById($id)
    {
        $this->product = new ProductMapper();
        $params = $this->product->getOneProduct($id);
        return $this->view->render('../App/View/Templates/productlist.php', $params, 'layout.php');
    }

}