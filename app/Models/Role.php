<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
    protected $table = 'roles';

    protected $fillable = ['name', 'guard_name'];

    public function permissions(){
        return $this->belongsToMany(Permission::class,'permisson_role');

    }


}