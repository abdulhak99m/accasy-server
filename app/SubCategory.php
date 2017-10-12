<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
     protected $guarded = [
        'id'
    ];
    //
    public function reports() {
        return $this->hasMany(Report::class);
    }
    
    public function category() {
        return $this->belongsTo(Category::class);
    }
}
