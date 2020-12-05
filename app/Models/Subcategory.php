<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    use HasFactory;
    protected $table = 'subcategories';

    protected $fillable = ['title','slug','rank','category_id','description','status'];

    public function category(){
        return $this->belongsTo(Category::class);
    }

}
