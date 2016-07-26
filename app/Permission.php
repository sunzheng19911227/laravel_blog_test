<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    //
    public function roles(){
    	return $this->belongsToMany(Role::class);
    }
    
    // 二级分类
    public function childrenPid(){
    	return $this->hasMany(Permission::class, 'pid', 'id');
    }
}
