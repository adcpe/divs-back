<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Division extends Model
{
    use HasFactory;

    public function parent()
    {
        return $this->belongsTo(Division::class);
    }

    public function children()
    {
        return $this->hasMany(Division::class);
    }
}
