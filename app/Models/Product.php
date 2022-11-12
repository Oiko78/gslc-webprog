<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product {
    use HasFactory;

    static $products = [
        [
            "id" => 1,
            "image" => "default.jpg",
            "name" => "Lorem ipsum dolor",
            "category" => "Pop",
            "price" => 214241,
            "qty" => 0
        ],
        [
            "id" => 2,
            "image" => "default.jpg",
            "name" => "Lorem ipsum dolor",
            "category" => "Pop",
            "price" => 214241,
            "qty" => 10
        ],
        [
            "id" => 3,
            "image" => "default2.jpg",
            "name" => "Lorem ipsum dolor",
            "category" => "Pop",
            "price" => 214241,
            "qty" => 0
        ],
        [
            "id" => 4,
            "image" => "default2.jpg",
            "name" => "Lorem ipsum dolor",
            "category" => "Pop",
            "price" => 214241,
            "qty" => 2
        ],
    ];

    /**
     * Returns list of product.
     *
     * @return \App\Models\Product[]
     */
    public static function all() {
        return self::$products;
    }

    /**
     * Returns the specified product.
     *
     * @return \App\Models\Product
     */
    public static function find($id) {
        foreach (self::$products as $product) {
            if ($product['id'] === $id) {
                return $product;
            }
        }
        return null;
    }
}
