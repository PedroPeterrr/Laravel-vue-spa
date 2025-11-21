<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    protected $table = 'content';
    protected $fillable = ['type', 'title', 'series_id'];

    public function series()
    {
        return $this->belongsTo(Content::class, 'series_id');
    }

    public function lessons()
    {
        return $this->hasMany(Content::class, 'series_id');
    }
}
