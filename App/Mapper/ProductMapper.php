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
    public static function getProductID($id): array
    {
        return Controller::$db->query("SELECT * FROM products WHERE id = ${id}");
    }
}
