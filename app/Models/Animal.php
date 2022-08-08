<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    use HasFactory;

    protected $fillable = ['details_id', 'species'];

    public function details() {
        return $this->hasMany('App\Models\Details');
    }
}
