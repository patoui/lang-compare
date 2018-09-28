<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comparison extends Model
{
    protected $hidden = ['pivot'];

    public function matches()
    {
        return $this->belongsToMany(self::class, 'matches', 'parent_id', 'match_id');
    }
}
