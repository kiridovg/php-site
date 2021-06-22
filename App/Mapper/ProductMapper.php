<?php

namespace App\Mapper;

use Framework\Core\Controller;
use PDO;

class ProductMapper
{
    public static function getAllProduct(): array
    {
        return Controller::$db->query("SELECT * FROM products")->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function getsortProduct($id): array
    {
        if ($id == 'priceASC') {
        return Controller::$db->query("SELECT * FROM products ORDER BY price")->fetchAll(PDO::FETCH_ASSOC);
        }
        if ($id == 'priceDESC') {
            return Controller::$db->query("SELECT * FROM products ORDER BY price DESC")->fetchAll(PDO::FETCH_ASSOC);
        }
        if ($id == 'idASC') {
            return Controller::$db->query("SELECT * FROM products ORDER BY id")->fetchAll(PDO::FETCH_ASSOC);
        }
        if ($id == 'idDESC') {
            return Controller::$db->query("SELECT * FROM products ORDER BY id DESC")->fetchAll(PDO::FETCH_ASSOC);
        }
    }

    public static function getProductID($id): array
    {
        return Controller::$db->query("SELECT * FROM products WHERE id = ${id}");
    }
}
