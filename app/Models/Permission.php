<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    use HasFactory;
    protected $table = 'permissions';

    protected $fillable = ['name', 'guard_name'];

    public function subcategories(){
        return $this->hasMany(Subcategory::class);

    }
    public function posts(){
        return $this->hasMany(Post::class);

    }


}
