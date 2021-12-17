<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'product';
    protected $fillable = [
        'productId',
        'productName',
        'prductImage',
        'category',
        'oldprice',
        'newprice',
        'quantity',
        'author',
        'translator',
        'publisher',
        'numberpage',
        'publicDate',
        'description',
    ];
}
