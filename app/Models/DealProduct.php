<?php

namespace App\Models;

use App\Models\Deal;
use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DealProduct extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }


    public function deal()
    {
        return $this->belongsTo(Deal::class, 'deal_id');
    }

}
