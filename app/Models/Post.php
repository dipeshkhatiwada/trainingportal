<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $table = 'posts';

    protected $fillable = ['title', 'slug', 'rank', 'description', 'category_id', 'subcategory_id', 'image', 'view', 'status','tags','main_news'];

    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function subcategory(){
        return $this->belongsTo(Subcategory::class);
    }
    public function tags(){
        return $this->belongsToMany(Tag::class);

    }



}
