<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Product extends Model
{
    use HasFactory;

    protected $table = 'product';

    protected $fillable =
        [
            'id',
            'name'
        ];
    public $timestamps = true;

    public static function table(){
        return datatables()->of(Product::query())->toJson();
    }
}
