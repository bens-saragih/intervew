<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Articles extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function komentars()
    {
        return $this->hasMany('App\Models\Komentar');
    }

    public function getJudulAttribute($value)
    {
        return Str::words($value,6);
    }

}
