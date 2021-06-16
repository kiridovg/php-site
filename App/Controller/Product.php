<?php
namespace App\Controller;

use App\Mapper\ProductMapper;
use App\Model\ProductModel;
use Framework\Core\View;
use Framework\Core\Controller;
use Framework\Database\Database;

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
        $this->product = new ProductModel();
        $params = $this->product->getOneProduct($id);
        return $this->view->render('product_one.php', $params, 'site.php');
    }

}