<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PorfolioCategory extends Model
{
    use HasFactory;
    public function portfolios()
    {
        return $this->hasMany(Portfolio::class, 'category_id');
    }
}
