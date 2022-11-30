<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class Offer extends Model
{
    
    use HasFactory;    
    use HasUuids;

    public $guarded = [];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
 
}
