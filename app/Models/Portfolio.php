<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory;
    public function category()
    {
        return $this->belongsTo(PorfolioCategory::class, 'category_id');
    }
}
