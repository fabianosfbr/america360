<?php

namespace App\Models;

use WendellAdriel\Lift\Lift;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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
