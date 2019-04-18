<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'code', 'route', 'state', 'mainState', 'shortLabel', 'target', 'type', 'icon', 'badge', 'sequence', 'parentId'
    ];
}
