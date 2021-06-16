<?php

namespace App\Mapper;


use Framework\Core\Controller;
use PDO;

class ProductMapper
{

    public static function setProduct(array $params = []): void
    {
        $sql = 'INSERT INTO products(name, price, img) VALUES ($params[0], $params[1], $params[2])';
        Controller::$db->query($sql);
    }

    public static function getAllProduct(): array
    {
        return Controller::$db->query("SELECT * FROM products")->fetchAll(PDO::FETCH_ASSOC);
    }
}