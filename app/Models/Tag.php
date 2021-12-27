<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Tag extends Model
{
    use HasFactory;

    protected $table = 'tag';

    protected $fillable = [
        'id',
        'name'
    ];

    public static function etiqueta($id){
        $etiqueta = DB::table('tag')
        ->whereNotIn('id',DB::table('product_tag')
                            ->select('tag_id')
                            ->where('product_id',$id))->get();

        return $etiqueta;
    }
    
    public $timestamps = true;
}
