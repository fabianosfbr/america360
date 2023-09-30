<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Newsletter extends Model
{
    use Lift, SoftDeletes;

    public int $id;

    #[Config(fillable: true, rules: ['required', 'string'])]
    public string $name;

    #[Config(fillable: true, rules: ['required', 'string'])]
    public string $email;

    #[Config(fillable: true, rules: ['required', 'string'])]
    public string $phone;
}
