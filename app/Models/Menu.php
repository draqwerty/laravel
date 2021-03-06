<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $table = 'menus';

    public function parent()
    {
        return $this->hasOne('App\Models\Menu', 'id', 'parent_id')->where('active', '=', '1')->orderBy('sort_order');
    }

    public function children()
    {

        return $this->hasMany('App\Models\Menu', 'parent_id', 'id')->where('active', '=', '1')->orderBy('sort_order');
    }

    public static function tree()
    {
        return static::with(implode('.', array_fill(0, 100, 'children')))->where('parent_id', '=', '0')->orderBy('sort_order')->get();
    }
}
