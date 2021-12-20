<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';
    public $timestamps = false;
    protected $fillable = [
        'productName',
        'prductImage',
        'category',
        'price',
        'newPrice',
        'quantity',
        'author',
        'translator',
        'publisher',
        'numberPage',
        'publicDate',
        'description',
        'created_at ',
    ];

}
