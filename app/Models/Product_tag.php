<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Product_tag extends Model
{
    use HasFactory;
    protected $table = 'product_tag';

    protected $fillable = [
        'product_id',
        'tag_id'
    ];



    public static function novaetiqueta($id){
        $novaetiqueta = DB::table('tag')
        ->whereIn('id',DB::table('product_tag')
                            ->select('tag_id')
                            ->where('product_id',$id))
                            ->get();
        return $novaetiqueta;
    }

    public $timestamps = true;
}
