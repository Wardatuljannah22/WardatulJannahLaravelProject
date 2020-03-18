<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $fillable = ['name', 'slug', 'parent_id'];

    // public function childs() {
    // 	return $this->hasMany('App\Model\Category', 'parent_id');
    // }

    // public function parent() {
    // 	return $thisbelongsTo('App\Models\Category','parent_id');
    // }
}
