<?php

namespace App;

use App\Product;
use App\Scopes\SellerScope;

class Seller extends User
{
    //

    public static function boot()
    {
        parent::boot(); // TODO: Change the autogenerated stub

        static::addGlobalScope(new SellerScope());
    }

    public function products(){
        return $this->hasMany(Product::class);
    }
}