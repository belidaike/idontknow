<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Details extends Model
{
    use HasFactory;

    protected $fillable = ['animal_id', 'name', 'age', 'address'];

    public function animal() {
        return $this->belongsTo('App\Models\Animal');
    }
}
