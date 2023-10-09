<?php

namespace App\Models;

use App\Models\Contact;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Account extends Model
{
    use HasFactory;

    protected $guarded = ['id'];


    public function contacts()
    {
        return $this->hasMany(Contact::class, 'account_id');


    }
}
