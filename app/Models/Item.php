<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    public function category() {
    return $this->belongsTo(Category::class);
}

public function variants() {
    return $this->hasMany(ItemVariant::class);
}

}
