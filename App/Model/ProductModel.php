<?php

namespace App\Model;

use App\Mapper\ProductMapper;
use Framework\Core\Model;

class ProductModel extends Model
{
    public int $id;
    public string $name;
    public int $price;
    public int $count;

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getPrice(): int
    {
        return $this->price;
    }

    public function getCount(): int
    {
        return $this->count;
    }


    public function getAllProduct(): array
    {
        return ProductMapper::getAllProduct();
    }

}