<?php

declare(strict_types=1);

error_reporting(E_ALL);
ini_set('display_errors', '0');
class ProductIdException extends Exception{
    protected $code = 404;
    protected $message = 'ID already created';
}

class IdProduct{

    public $poducts;
    function __construct(){
        $this->poducts = json_decode(file_get_contents('db.txt'), true);
    }

    public function getPoducts(int $id)
    {
        $this->poducts = json_decode(file_get_contents('db.txt'), true);
        return $this->poducts[$id - 1];

    }
    public function setPoducts(int $id)
    {
        $flag = true;
        if($this->poducts[$id - 1] === null) {
            $this->poducts[$id - 1] = [
                'id' => $id,
                'name' => 'Phone' . $id,
                'description' => $id
            ];
            $flag = false;
        }
        if ($flag) {
            throw new ProductIdException();
        }

        file_put_contents('db.txt', json_encode($this->poducts));


    }
}
$id = 105;
$p1 = new IdProduct();
try {
    $p1->setPoducts($id);
} catch (ProductIdException $exception) {
    print_r($exception);
    print_r('ProductIdException');
} finally {
    var_dump($p1->getPoducts($id));
}
