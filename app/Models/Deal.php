<?php

namespace App\Models;

use App\Models\Account;
use App\Models\DealProduct;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Deal extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function customer()
    {
        return $this->belongsTo(Account::class, 'customer_id');
    }

    public function products()
    {
        return $this->hasMany(DealProduct::class, 'deal_id');
    }

    public function closeAsWon()
    {
        $this->status = 2;
        $this->date_won = now();
        $this->save();

    }

    public function closeAsLost()
    {
        $this->status = 3;
        $this->date_lost = now();
        $this->save();
    }




}
